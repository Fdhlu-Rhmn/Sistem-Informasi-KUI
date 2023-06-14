<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendingInbound;
use App\Models\StudentInbound;


class PendingInboundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $forminbound = PendingInbound::where('Nama', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Email', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Institusi_Asal', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Negara_Asal', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Fakultas', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Prodi', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $forminbound = PendingInbound::paginate(5);
        }
        return view('pendingInbound.inbound', compact('forminbound'));
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
        StudentInbound::create($request->all());

        return redirect()->route('pendingInbound.index')->with('success', 'Add data succesfull');
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
        $forminbound = PendingInbound::findOrFail($id);

        $forminbound->delete();

        return view('pendingInbound.edit', compact('forminbound'));
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
        $forminbound = PendingInbound::findOrFail($id);

        $forminbound->delete();

        return redirect()->route('pendingInbound.index')->with('delete', 'Delete data succesfull');
    }
}