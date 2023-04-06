<?php

namespace App\Http\Controllers;

use App\Models\Inbound;
use App\Models\Outbound;
use Illuminate\Http\Request;

class InboundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inbounds = Inbound::all();
        $outbounds = Outbound::all();
        return view('dosen', [
            'inbounds' => $inbounds,
            'outbounds' => $outbounds,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inbound.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Inbound::create($request->all());
        return redirect()->route('dosen-inbound.index')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inbound $inbound)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($inboundId)
    {
        $inbound = Inbound::findOrFail($inboundId);

        return view('inbound.edit', [
            'inbound' => $inbound
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $inboundId)
    {
        $inbound = Inbound::findOrFail($inboundId);

        $inbound->update($request->all());
        return redirect()->route('dosen-inbound.index')->with('success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($inboundId)
    {
        $inbound = Inbound::findOrFail($inboundId);
        $inbound->delete();
        return redirect()->route('dosen-inbound.index')->with('success', 'Data Berhasil dihapus');
    }
}
