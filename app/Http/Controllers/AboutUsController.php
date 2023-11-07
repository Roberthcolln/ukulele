<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('about_us')->get();
        return view('about_us.index', [
            'title' => 'About Us',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about_us.create', [
            'title' => 'About Us'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required'
        ]);

        DB::table('about_us')->insert([
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('about_us')->with('sukses', 'Data Berhasil ditambahkan');
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
        $data = DB::table('about_us')->where('id', $id)->first();
        return view('about_us.edit', [
            'title' => 'Form edit About Us',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'deskripsi' => 'required'
        ]);

        DB::table('about_us')->where('id', $id)->update([
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('about_us')->with('sukses', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('about_us')->where('id', $id)->delete();
        return back()->with('sukses', 'Data Berhasil dihapus');
    }
}
