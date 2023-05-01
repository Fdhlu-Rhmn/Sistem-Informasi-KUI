<?php

namespace App\Http\Controllers;

use App\Models\StudentInbound;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;
use Illuminate\View\View;

class StudentInboundController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $dataInbound = StudentInbound::orderBy('created_at', 'DESC')->get();
    return view('pagesStudentIn.inbound', compact('dataInbound'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('pagesStudentIn.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // dd($request->all());
    StudentInbound::create($request->all());
    return redirect()->route('inbound.index')->with('success', 'Data berhasil di tambahkan');
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
    $inbound = StudentInbound::findOrFail($id);

    return view('pagesStudentIn.edit', compact('inbound'));
  } //untuk view jika menggunakan mahasiswa.edit sebenarnya mencari lokasi namaFolder.file

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $inbound = StudentInbound::findOrFail($id);

    $inbound->update($request->all());

    return redirect()->route('inbound.index')->with('success', 'Data berhasil di ubah');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $inbound = StudentInbound::findOrFail($id);

    $inbound->delete();

    return redirect()->route('inbound.index')->with('success', 'Data Berhasil di hapus');
  }
}