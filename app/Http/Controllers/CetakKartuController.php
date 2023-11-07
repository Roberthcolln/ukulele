<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CetakKartuController extends Controller
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
        $data = DB::table('pic_kelompok_ukuleles')->where('id_pic_kelompok', $id)->first();

        // nomor panitia
        $id_pic = 'P' . str_pad( $data->kabupaten,2,'0', STR_PAD_LEFT) . '-' . str_pad( $data->id_pic_kelompok,5,'0', STR_PAD_LEFT);
        return view('cetak.cetak_kartu', [
            'title' => 'Cetak Kartu Pic',
            'ID_PIC' => $id_pic,
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
