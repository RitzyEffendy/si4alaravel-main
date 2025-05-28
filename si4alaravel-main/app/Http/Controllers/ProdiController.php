<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('prodi.create', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $input = $request->validate([
            'nama' => 'required|unique:prodi',
            'singkatan' => 'required|max:5',
            'kaprodi' => 'required',
            'sekretaris' => 'required',
            'fakultas_id' => 'required',
        ]);

        //Simpan data ke tabel prodi
        Prodi::create($input);

        //Redirect ke route prodi.index
        return redirect()->route('prodi.index')->with('success', 'Program studi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        // dd($prodi);
        $fakultas = Fakultas::all(); // Ambil semua data fakultas
        return view('prodi.edit', compact('prodi', 'fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        // Validasi input
        $input = $request->validate([
        'nama' => 'required',
        'singkatan' => 'required|max:5',
        'kaprodi' => 'required',
        'sekretaris' => 'required',
        'fakultas_id' => 'required',
        ]);

        // Simpan data ke tabel prodi
        $prodi->update($input);

        // Redirect ke route prodi.index
        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($prodi)
    {
        $prodi = Prodi::findOrFail($prodi);
        // dd($prodi);

        // Hapus data prodi
        $prodi->delete();

        // Redirect ke route prodi.index
        return redirect()->route('prodi.index')->with('success', 'Program studi berhasil dihapus.');
    }
}
