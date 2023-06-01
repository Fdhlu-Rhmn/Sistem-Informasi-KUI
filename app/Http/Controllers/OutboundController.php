<?php

namespace App\Http\Controllers;

use App\Models\Outbound;
use Illuminate\Http\Request;
use App\Exports\ExportOutbound;
use App\Imports\ImportOutbound;

class OutboundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $outbounds = Outbound::paginate(5);
        if ($request->has('search')) {
            $outbounds = Outbound::where('name', 'LIKE', '%'.$request->search.'%')
                ->orWhere('email', 'LIKE', '%'.$request->search.'%')
                ->orWhere('institusi_tujuan', 'LIKE', '%'.$request->search.'%')
                ->orWhere('negara_tujuan', 'LIKE', '%'.$request->search.'%')
                ->orWhere('fakultas', 'LIKE', '%'.$request->search.'%')
                ->orWhere('prodi', 'LIKE', '%'.$request->search.'%')
                ->paginate(5);
        }else{
            $outbounds = Outbound::paginate(5);
        }
        return view('outbound.index', [
            'outbounds' => $outbounds,
        ]);
    }
    public function importExportOutbound()
    {
       return view('Outbound.index');
    }
  
    public function exportOutbound() 
    {
        return 'Excel'::download(new ExportOutbound, 'LecturerOutbound.xlsx');
    }
  
    public function importOutbound() 
    {
        'Excel'::import(new ImportOutbound, request()->file('file'));
            
        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('outbound.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Outbound::create($request->all());
        return redirect()->route('dosen-outbound.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($outboundId)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($outboundId)
    {
        $outbound = Outbound::findOrFail($outboundId);
        return view('outbound.edit', [
            'outbound' => $outbound,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $outboundId)
    {
        $outbound = Outbound::findOrFail($outboundId);

        $outbound->update($request->all());
        return redirect()->route('dosen-outbound.index')->with('success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($outboundId)
    {

        $outbound = Outbound::findOrFail($outboundId);
        $outbound->delete();
        return redirect()->route('dosen-outbound.index')->with('delete', 'Data Berhasil di hapus');
    }
}