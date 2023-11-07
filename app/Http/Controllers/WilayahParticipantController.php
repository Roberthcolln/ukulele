<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WilayahParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('wilayah_participants')
            ->join('kabupaten', 'wilayah_participants.id_wilayah', '=', 'kabupaten.id_kabupaten')
            ->get();
        return view('wilayah_partisipan.index', [
            'title' => 'Data Wilayah Partisipan',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kabupaten = DB::table('kabupaten')->get();
        
        return view('wilayah_partisipan.create', [
            'title' => 'Form Tambah Data Wilayah Partisipan',
            'kabupaten' => $kabupaten
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'unique' => 'Data sudah ada'
        ];
        $request->validate([
            'id_wilayah' => 'unique:wilayah_participants'
        ],$message);
        DB::table('wilayah_participants')->insert([
            'id_wilayah' => $request->id_wilayah
        ]);
        return redirect('wilayah_participant')->with('sukses', 'Data Berhasil ditambahkan');
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
        $data = DB::table('wilayah_participants')->where('id_wilayah', $id)->first();
        $kabupaten = DB::table('kabupaten')->get();
        return view('wilayah_partisipan.create', [
            'title' => 'Form Edit Data Wilayah Partisipan',
            'kabupaten' => $kabupaten,
            'data' => $data
        ]);
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
        //
    }
}
