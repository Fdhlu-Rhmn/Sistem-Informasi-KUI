<?php

namespace App\Http\Controllers;

use App\Models\Outbound;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;
use Illuminate\View\View;

class OutboundController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $dataOutbound = Outbound::orderBy('created_at', 'DESC')->get();
    return view('StudentOutbound.outbound', compact('dataOutbound'));
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
    Outbound::create($request->all());
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
    $outbound = Outbound::findOrFail($id);

    return view('StudentOutbound.edit', compact('outbound'));
  } //untuk view jika menggunakan mahasiswa.edit sebenarnya mencari lokasi namaFolder.file

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $outbound = Outbound::findOrFail($id);

    $outbound->update($request->all());

    return redirect()->route('outbound.index')->with('success', 'Data berhasil di ubah');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $outbound = Outbound::findOrFail($id);

    $outbound->delete();

    return redirect()->route('outbound.index')->with('success', 'Data Berhasil di hapus');
  }
}