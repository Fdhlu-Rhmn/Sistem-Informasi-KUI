<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pending;
use App\Models\Post;


class PendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $pendings = Pending::where('Nama', 'LIKE', '%' . $request->search . '%')
                ->orWhere('NIM', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Fakultas_Prodi', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Negara_Asal', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $pendings = Pending::paginate(5);
        }
        return view('pending.pending', compact('pendings'));
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
        Post::create($request->all());
        return redirect()->route('pending.index')->with('success', 'Data berhasil di tambahkan');
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
        $pendings = Pending::findOrFail($id);

        return view('pending.edit', compact('pendings'));
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
        $pendings = Pending::findOrFail($id);

        $pendings->delete();

        return redirect()->route('pending.index')->with('success', 'Data Berhasil di hapus');    }
}