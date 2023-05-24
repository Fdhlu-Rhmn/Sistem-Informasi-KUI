<?php

namespace App\Http\Controllers;

// use App\Models\User;
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

    public function update(Request $request){
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
        ];

        if($request->password != null){
            $rules['password'] = 'required|min:8|confirmed';
        }

        $validatedData = $request->validate($rules);

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
