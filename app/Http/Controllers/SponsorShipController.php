<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SponsorShipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('sponsor_ships')->get();
        return view('sponsorship.index', [
            'title' => 'Data Sponsorship',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sponsorship.create', [
            'title' => 'Data Sponsorship'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_instansi' => 'required|unique:sponsor_ships',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png,JPG,JPEG,PNG'
        ]);

        // upload
        $file = $request->file('foto');
        $namaFile = 'foto' . rand() . '.' . str_replace(" ", "", $file->getClientOriginalExtension());
        $file->move('file/sponsorship/', $namaFile);

        // insert
        DB::table('sponsor_ships')->insert([
            'nama_instansi' => $request->nama_instansi,
            'situs' => $request->situs,
            'logo' => $namaFile
        ]);

        return redirect('sponsorship')->with('sukses', 'Data Berhasil ditambahkan');
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
        $data = DB::table('sponsor_ships')->where('id', $id)->first();
        return view('sponsorship.edit', [
            'title' => 'Form Edit Data Sponsorship',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->file('foto')) {
            // upload
            $file = $request->file('foto');
            $namaFile = 'foto' . rand() . '.' . str_replace(" ", "", $file->getClientOriginalExtension());
            $file->move('file/sponsorship/', $namaFile);

            // hapus foto lama
            @unlink('file/sponsorship/' . $request->fileLama);

            DB::table('sponsor_ships')->where('id', $id)->update([
                'nama_instansi' => $request->nama_instansi,
                'situs' => $request->situs,
                'logo' => $namaFile
            ]);

            return redirect('sponsorship')->with('sukses', 'Data Berhasil diedit');
        }

        DB::table('sponsor_ships')->where('id', $id)->update([
            'nama_instansi' => $request->nama_instansi,
            'situs' => $request->situs,
            'logo' => $request->fileLama
        ]);

        return redirect('sponsorship')->with('sukses', 'Data Berhasil diedit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // hapus file
        $data = DB::table('sponsor_ships')->where('id', $id)->first();
        @unlink('file/sponsorship/' . $data->logo);

        // hapus data
        DB::table('sponsor_ships')
            ->where('id', $id)
            ->delete();
        return back()->with('sukses', 'Data Berhasil Dihapus!');
    }
}
