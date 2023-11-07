<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $wilayah_participant = DB::table('kabupaten')
            ->join('wilayah_participants', 'kabupaten.id_kabupaten', '=', 'wilayah_participants.id_wilayah')
            ->get();

        $about = DB::table('about_us')->first();
        $event = DB::table('events')->first();
        $data  = DB::table('artis')->get();
        $sponsorship  = DB::table('sponsor_ships')->get();
        $ukulele  = DB::table('ukuleles')->count();
        $presensi_ukulele  = DB::table('presensi_ukuleles')->count();
        $peserta  = DB::table('pesertas')->count();
        $presensi_peserta  = DB::table('presensi_pesertas')->count();

        $presentase_peserta = $presensi_peserta / $peserta * 100;
        $presentase_ukulele = $presensi_ukulele / $ukulele * 100;
        // dd($presentase_ukulele);
        return view('landing_page.index', [
            'title' => 'DisporaVerse - Beranda',
            'ukulele' => $ukulele,
            'peserta' => $peserta,
            'presensi_peserta' => $presensi_peserta,
            'presentase_peserta' => $presentase_peserta,
            'data' => $data,
            'about' => $about,
            'event' => $event,
            'sponsorship' => $sponsorship,
            'presensi_ukulele' => $presensi_ukulele,
            'presentase_ukulele' => $presentase_ukulele,
            'wilayah_participant' => $wilayah_participant
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
        return 'store';
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
