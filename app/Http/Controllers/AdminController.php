<?php

namespace App\Http\Controllers;

use App\Models\Iuran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = DB::table('users')
            ->join('kategori_admin', 'users.id_kategori_admin', 'kategori_admin.id_kategori_admin')
            ->join('provinsi', 'users.id_provinsi', 'provinsi.id_provinsi')
            ->join('kota', 'users.id_kota', 'kota.id_kota')
            ->get();

        $title = 'Data Admin';
        return view('admin.index', compact('admin', 'title'));
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
