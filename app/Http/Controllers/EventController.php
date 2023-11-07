<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('events')->get();
        return view('event.index', [
            'title' => 'Event',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event.create', [
            'title' => 'Form Tambah Event'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required',
            'deskripsi_event' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required'
        ]);

        DB::table('events')->insert([
            'nama_event' => $request->nama_event,
            'deskripsi_event' => $request->deskripsi_event,
            'tgl_mulai' => $request->tanggal_mulai,
            'tgl_selesai' => $request->tanggal_selesai
        ]);

        return redirect('event')->with('sukses', 'Data Berhasil ditambahkan');
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
        $data = DB::table('events')->where('id', $id)->first();
        return view('event.edit', [
            'title' => 'Form Edit Event',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_event' => 'required',
            'deskripsi_event' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required'
        ]);

        DB::table('events')->where('id', $id)->update([
            'nama_event' => $request->nama_event,
            'deskripsi_event' => $request->deskripsi_event,
            'tgl_mulai' => $request->tanggal_mulai,
            'tgl_selesai' => $request->tanggal_selesai
        ]);

        return redirect('event')->with('sukses', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('events')->where('id', $id)->delete();
        return back()->with('sukses', 'Data Berhasil dihapus');
    }
}
