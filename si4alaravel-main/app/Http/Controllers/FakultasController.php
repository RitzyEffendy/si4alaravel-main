<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakultas = Fakultas::all();
        return view('fakultas.index', compact('fakultas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cek apakah user memiliki izin
        if ($request->user()->cannot('create', Fakultas::class)){
            abort(403);
        }

        // Validasi input
        $input = $request->validate([
            'nama' => 'required|unique:fakultas',
            'singkatan' => 'required|max:5',
            'dekan' => 'required',
            'wakil_dekan' => 'required',
        ]);

        //Simpan data ke tabel fakultas
        Fakultas::create($input);

        //Redirect ke route fakultas.index
        return redirect()->route('fakultas.index')->with('success', 'Fakultas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($fakultas)
    {
        $fakultas = Fakultas::findOrFail($fakultas);
        // dd($fakultas);
        return view('fakultas.show', compact('fakultas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($fakultas)
    {
        $fakultas = Fakultas::findOrFail($fakultas);
        // dd($fakultas);
        return view('fakultas.edit', compact('fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        $fakultas = Fakultas::findOrFail($fakultas);

        // Cek user izin mengupdate Fakultas
        if ($request->user()->cannot('update', $fakultas)){
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $fakultas)
    {

        $fakultas = Fakultas::findOrFail($fakultas);
        // dd($fakultas);

        if ($request->user()->cannot('delete', $fakultas)){
            abort(403);
        }

        //Hapus data fakultas
        $fakultas->delete();

        //Redirect ke route fakultas.index
        return redirect()->route('fakultas.index')->with('success', 'Fakultas Berhasil Dihapus.');
    }
}
