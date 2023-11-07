<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PresensiUkuleleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('presensi_ukuleles')->get();
        return view('presensi_ukulele.index', [
            'title' => 'Data Presensi Ukulele',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('presensi_ukulele.create', [
            'title' => 'Form Presensi Ukulele'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_ukulele' => 'unique:presensi_ukuleles'
        ]);

        $today = Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm');
        DB::table('presensi_ukuleles')->insert([
            'id_ukulele' => $request->id_ukulele,
            'status_kehadiran' => 'Hadir',
            'waktu_presensi' => $today
        ]);

        return back()->with('sukses', 'Absensi Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $x = explode('-',$id);
        $y = end($x);
        $id_ukulele = number_format($y);
        
        $result = DB::table('ukuleles')
        ->where('id_peserta_ukulele', $id_ukulele)
        ->first();

        return view('presensi_ukulele.show', [
            'title' => 'Detail Data Ukulele',
            'result' => $result
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
