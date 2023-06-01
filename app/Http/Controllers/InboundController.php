<?php

namespace App\Http\Controllers;

use App\Models\Inbound;
use App\Models\Outbound;
use Illuminate\Http\Request;
use App\Exports\ExportInbound;
use App\Imports\ImportInbound;

class InboundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $inbounds = Inbound::where('name', 'LIKE', '%'.$request->search.'%')
                ->orWhere('email', 'LIKE', '%'.$request->search.'%')
                ->orWhere('institusi_asal', 'LIKE', '%'.$request->search.'%')
                ->orWhere('negara_asal', 'LIKE', '%'.$request->search.'%')
                ->orWhere('fakultas', 'LIKE', '%'.$request->search.'%')
                ->orWhere('prodi', 'LIKE', '%'.$request->search.'%')
                ->paginate(5);
        }else{
            $inbounds = Inbound::paginate(5);
        }
        // $inbounds = Inbound::paginate(5);
        return view('inbound.index', [
            'inbounds' => $inbounds,
        ]);
    }
    public function importExportInbound()
    {
       return view('inbound.index');
    }
  
    public function exportInbound() 
    {
        return 'Excel'::download(new ExportInbound, 'LecturerInbound.xlsx');
    }
  
    public function importInbound() 
    {
        'Excel'::import(new ImportInbound, request()->file('file'));
            
        return back();
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
        return redirect()->route('dosen-inbound.index')->with('delete', 'Data Berhasil di hapus');
    }
}