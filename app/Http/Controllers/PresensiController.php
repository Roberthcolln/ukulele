<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('presensis')->get();
        return view('presensi_pic.index', [
            'title' => 'Data Presensi PIC',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('presensi_pic.create', [
            'title' => 'Form Absensi PIC'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pic' => 'unique:presensis'
        ]);
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm');
        DB::table('presensis')->insert([
            'id_pic' => $request->id_pic,
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
        $x = explode('-', $id);
        $y = end($x);
        $id_pic = number_format($y);

        $result = DB::table('pic_kelompok_ukuleles')
            ->where('id_pic_kelompok', $id_pic)
            ->first();

        return view('presensi_pic.show', [
            'title' => 'Detail Data PIC',
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
        DB::table('presensis')->where('id_pic', $id)->delete();
        return back()->with('sukses', 'Absensi Dihapus!');
    }
}
