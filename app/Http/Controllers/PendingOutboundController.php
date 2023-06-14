<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendingOutbound;
use App\Models\StudentOutbound;


class PendingOutboundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $formoutbound = PendingOutbound::where('Nama', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Email', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Institusi_Tujuan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Negara_Tujuan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Fakultas', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Prodi', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Email', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $formoutbound = PendingOutbound::paginate(5);
        }
        return view('pendingOutbound.Outbound', compact('formoutbound'));
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
        StudentOutbound::create($request->all());

        return redirect()->route('pendingOutbound.index')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formoutbound = PendingOutbound::findOrFail($id);

        $formoutbound->delete();

        return view('pendingOutbound.edit', compact('formoutbound'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formoutbound = PendingOutbound::findOrFail($id);

        $formoutbound->delete();

        return redirect()->route('pendingOutbound.outbound')->with('success', 'Data Berhasil di hapus');
    }
}