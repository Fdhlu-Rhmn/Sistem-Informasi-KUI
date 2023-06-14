<?php

namespace App\Http\Controllers;

use App\Models\PendingOutbound;
use Illuminate\Http\Request;

class UserOutboundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formoutbound = PendingOutbound::all();
        return view('form.outbound', compact('formoutbound'));
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
        PendingOutbound::create($request->all());
        return redirect()->route('formoutbound')->with('success', 'Data berhasil di tambahkan');
        ;
    }

    /**
     * Display the specified resource.
     */
    public function show(PendingOutbound $pendings)
    {
        //
    }

    /**
     * Show the pendings for editing the specified resource.
     */
    public function edit(PendingOutbound $pendings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendingOutbound $formoutbound)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendingOutbound $formoutbound)
    {
        //
    }
}