<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CetakSemuaPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if( Auth::user()->id == 1 ) {
            $data = DB::table('pesertas')->get();
        }

        $data = DB::table('pesertas')->where('id_peserta_ukulele', Auth::user()->id)->get();

        return view('cetak_semua_kartu_peserta.cetak_kartu', [
            'title' => 'Cetak Semua Kartu Peserta',
            'data' => $data
        ]);
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
        //
    }
}
