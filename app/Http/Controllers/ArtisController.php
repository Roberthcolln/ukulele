<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('artis')->get();
        return view('artis.index', [
            'title' => 'Data Artis',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artis.create', [
            'title' => 'Form Tambah Data Artis'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'jobdesk' => 'required',
            'tlp' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png,JPG,JPEG,PNG'
        ]);

        // upload
        $file = $request->file('foto');
        $namaFile = 'foto' . rand() . '.' . str_replace(" ", "", $file->getClientOriginalExtension());
        $file->move('file/artis/', $namaFile);

        DB::table('artis')->insert([
            'name' => $request->name,
            'jobdesk' => $request->jobdesk,
            'tlp' => $request->tlp,
            'foto' => $namaFile
        ]);

        return redirect('artis')->with('sukses', 'Data Berhasil Ditambahkan!');
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
        $data = DB::table('artis')->where('id', $id)->first();
        return view('artis.edit', [
            'title' => 'Form Edit Data Artis',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi inputan
        $validatedData = $request->validate([
            'name' => 'required',
            'jobdesk' => 'required',
            'tlp' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png,JPG,JPEG,PNG'
        ]);

        if ($request->file('foto')) {
            // upload
            $file = $request->file('foto');
            $namaFile = 'foto' . rand() . '.' . str_replace(" ", "", $file->getClientOriginalExtension());
            $file->move('file/artis/', $namaFile);

            // hapus foto lama
            @unlink('file/artis/' . $request->fotoLama);

            // insert ke database
            DB::table('artis')->where('id', $id)->update([
                'name' => $request->name,
                'jobdesk' => $request->jobdesk,
                'tlp' => $request->tlp,
                'foto' => $namaFile
            ]);
            return redirect('artis')->with('sukses', 'Data Berhasil Diedit !');
        }

        // insert ke database
        DB::table('artis')->where('id', $id)->update([
            'name' => $request->name,
            'jobdesk' => $request->jobdesk,
            'tlp' => $request->tlp,
            'foto' => $request->fotoLama
        ]);

        return redirect('artis')->with('sukses', 'Data Berhasil Diedit !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // hapus data
        DB::table('artis')
            ->where('id', $id)
            ->delete();
        return back()->with('sukses', 'Data Berhasil Dihapus!');
    }
}
