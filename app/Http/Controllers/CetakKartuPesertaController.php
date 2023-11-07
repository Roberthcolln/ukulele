<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CetakKartuPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('pesertas')->where('id_peserta_ukulele', $id)->first();

        // nomor peserta
        $id_peserta = 'P' . str_pad( $data->id_kabupaten_peserta,2,'0', STR_PAD_LEFT) . '-' . str_pad( $data->id_peserta_ukulele,5,'0', STR_PAD_LEFT);
        return view('cetak_kartu_peserta.index', [
            'title' => 'Cetak Kartu Peserta',
            'ID_peserta' => $id_peserta,
            'data' => $data
        ]);
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
        //
    }
}
