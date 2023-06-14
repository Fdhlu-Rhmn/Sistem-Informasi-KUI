<?php

namespace App\Http\Controllers;

use App\Models\PendingInbound;
use Illuminate\Http\Request;

class UserInboundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forminbound = PendingInbound::all();
        return view('form.inbound', compact('forminbound'));
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
        PendingInbound::create($request->all());
        return redirect()->route('forminbounds')->with('success', 'Add data succesfull');
        ;
    }

    /**
     * Display the specified resource.
     */
    public function show(PendingInbound $pendings)
    {
        //
    }

    /**
     * Show the pendings for editing the specified resource.
     */
    public function edit(PendingInbound $pendings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendingInbound $pendings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendingInbound $pendings)
    {
        //
    }
}