<?php

namespace App\Http\Controllers;

use App\Models\StudentOutbound;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;
use Illuminate\View\View;
use App\Exports\ExportStudentOutbound;
use App\Imports\ImportStudentOutbound;

class StudentOutboundController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    if ($request->has('search')) {
      $dataOutbound = StudentOutbound::where('Nama', 'LIKE', '%' . $request->search . '%')
        ->orWhere('Email', 'LIKE', '%' . $request->search . '%')
        ->orWhere('Institusi_Tujuan', 'LIKE', '%' . $request->search . '%')
        ->orWhere('Negara_Tujuan', 'LIKE', '%' . $request->search . '%')
        ->orWhere('Fakultas', 'LIKE', '%' . $request->search . '%')
        ->orWhere('Prodi', 'LIKE', '%' . $request->search . '%')
        ->orWhere('Email', 'LIKE', '%' . $request->search . '%')
        ->paginate(5);
    } else {
      $dataOutbound = StudentOutbound::paginate(5);
    }
    // $dataOutbound = StudentOutbound::paginate(5);
    return view('StudentOutbound.outbound', compact('dataOutbound'));
  }

  public function importExportStudentOutbound()
  {
    return view('outbound');
  }

  public function exportStudentOutbound()
  {
    return 'Excel'::download(new ExportStudentOutbound, 'StudentOutbound.xlsx');
  }

  public function importStudentOutbound()
  {
    'Excel'::import(new ImportStudentOutbound, request()->file('file'));

    return back();
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('StudentOutbound.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // dd($request->all());
    StudentOutbound::create($request->all());
    return redirect()->route('outbound.index')->with('success', 'Data berhasil di tambahkan');
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
    $outbound = StudentOutbound::findOrFail($id);

    return view('StudentOutbound.edit', compact('outbound'));
  } //untuk view jika menggunakan mahasiswa.edit sebenarnya mencari lokasi namaFolder.file

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $outbound = StudentOutbound::findOrFail($id);

    $outbound->update($request->all());

    return redirect()->route('outbound.index')->with('success', 'Data berhasil di ubah');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $outbound = StudentOutbound::findOrFail($id);

    $outbound->delete();

    return redirect()->route('outbound.index')->with('success', 'Data Berhasil di hapus');
  }
}