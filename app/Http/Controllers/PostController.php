<?php

namespace App\Http\Controllers;

use App\Exports\ExportForeign;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;
use Illuminate\View\View;
use App\Imports\ImportForeign;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $posts = Post::where('Nama', 'LIKE', '%' . $request->search . '%')
                ->orWhere('NIM', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Fakultas_Prodi', 'LIKE', '%' . $request->search . '%')
                ->orWhere('Negara_Asal', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $posts = Post::paginate(5);
        }

        // $search = $request->search;
        // $posts = Post::where('Nama', 'LIKE', '%'.$search.'%')->orWhere('NIM', 'LIKE', '%'.$search.'%')->paginate(5);


        return view('pagesforeign.mahasiswa', compact('posts'));

    }

    // Import Export Function
    public function importExport()
    {
        return view('mahasiswa');
    }

    public function export()
    {
        return 'Excel'::download(new ExportForeign, 'users.xlsx');
    }

    public function import()
    {
        'Excel'::import(new ImportForeign, request()->file('file'));

        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pagesforeign.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Post::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil di tambahkan');
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
        $mahasiswa = Post::findOrFail($id);

        return view('pagesforeign.edit', compact('mahasiswa'));
    } //untuk view jika menggunakan mahasiswa.edit sebenarnya mencari lokasi namaFolder.file

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = Post::findOrFail($id);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Post::findOrFail($id);

        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data Berhasil di hapus');
    }
}
