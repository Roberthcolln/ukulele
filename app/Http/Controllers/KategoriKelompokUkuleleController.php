<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriKelompokUkuleleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DataUkulele = DB::table('kategori_kelompok_ukuleles')->get();

        return view('kategori_kelompok.index',[
            'title' => 'Data Kelompok Ukulele',
            'data' => $DataUkulele
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori_kelompok.create',[
            'title' => 'Form Tambah Kelompok Ukulele'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kelompok_ukulele' => 'required|unique:kategori_kelompok_ukuleles'
        ]);

        DB::table('kategori_kelompok_ukuleles')
        ->insert($validatedData);

        return redirect('kategori_kelompok')->with('sukses', 'Data Berhasil Ditambahkan!');
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
        //
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
        DB::table('kategori_kelompok_ukuleles')
        ->where('id', $id)
        ->delete();
        return back()->with('sukses', 'Data Berhasil Dihapus!');
    }
}
