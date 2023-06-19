<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login()
    {
        return view('/login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function update(Request $request, User $user){
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
        ];

        if($request->password != null){
            $rules['password'] = 'required|min:8|confirmed';
        }

        if($request->profile_picture != null){
            $rules['profile_picture'] =  'image|file|max:1024';
        }

        $validatedData = $request->validate($rules);

        if($request->hasFile('profile_picture')){
            if($old_profile_path = $user->profile_picture){
                $file_path = public_path($old_profile_path);
                if(File::exists($file_path)) File::delete($file_path);
            }

            $image = $request->file('profile_picture');
            $original_name = $image->getClientOriginalName();
            $destination_path = '/uploaded-files/profile-picture';
            $time = date('YmdHis');
            $image_name = 'profile-picture' . $time . '-'.$original_name;
            $image->move(public_path().$destination_path, $image_name);

            $validatedData['profile_picture'] = $destination_path . '/' . $image_name;
        }

        if($request->password != null){
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        $user = Auth::user();
        $user->update($validatedData);

        return redirect()->back();
    }


    public function index() {
        $user = Auth::user();
        return view('profil', [
            'user' => $user
        ]);
    }
}
