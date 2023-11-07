<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = DB::table('pesertas')->count();
        $pic = DB::table('pic_kelompok_ukuleles')->count();
        $ukulele = DB::table('ukuleles')->count();
        $presensi_pic = DB::table('presensis')->count();
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'peserta' => $peserta,
            'pic' => $pic,
            'ukulele' => $ukulele,
            'presensi_pic' => $presensi_pic
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
