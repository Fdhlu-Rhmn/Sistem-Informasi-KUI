<?php

namespace App\Http\Controllers;

use App\Models\Pending;
use Illuminate\Http\Request;

class UserFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendings = Pending::all();
        return view('form.index', compact('pendings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pending::create($request->all());
        return redirect()->route('userDB')->with('success', 'Add data succesfull');
        ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Pending $pendings)
    {
        //
    }

    /**
     * Show the pendings for editing the specified resource.
     */
    public function edit(Pending $pendings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pending $pendings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pending $pendings)
    {
        //
    }
}