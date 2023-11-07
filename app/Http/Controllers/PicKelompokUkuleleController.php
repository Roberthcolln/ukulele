<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PicKelompokUkuleleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('pic_kelompok_ukuleles')->get();
        return view('pic_kelompok_ukulele.index', [
            'title' => 'Data PIC Kelompok Ukulele',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelompok_ukulele = DB::table('kategori_kelompok_ukuleles')->get();
        $jenis_kelamin = DB::table('jenis_kelamin')->get();
        $kecamatan = DB::table('kecamatan')->get();
        $kabupaten = DB::table('kabupaten')->get();
        return view('pic_kelompok_ukulele.create', [
            'title' => 'Form Tambah Data PIC Kelompok Ukulele',
            'jenis_kelamin' => $jenis_kelamin,
            'kelompok_ukulele' => $kelompok_ukulele,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'tlp' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nama_kelompok_ukulele' => 'required',
            'password' => 'required|confirmed|min:8',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png,JPG,JPEG,PNG'
        ]);

        // upload
        $file = $request->file('foto');
        $namaFile = 'foto' . rand() . '.' . str_replace(" ", "", $file->getClientOriginalExtension());
        $file->move('file/pic_kelompok_ukulele/', $namaFile);

        DB::table('pic_kelompok_ukuleles')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'tlp' => $request->tlp,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_kelompok_ukulele' => $request->nama_kelompok_ukulele,
            'foto' => $namaFile
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('pic_kelompok_ukulele')->with('sukses', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pic_kelompok = DB::table('pic_kelompok_ukuleles')
            ->join('kecamatan', 'pic_kelompok_ukuleles.kecamatan', '=', 'kecamatan.id_kecamatan')
            ->join('kabupaten', 'pic_kelompok_ukuleles.kabupaten', '=', 'kabupaten.id_kabupaten')
            ->select('pic_kelompok_ukuleles.*', 'kecamatan.nama_kecamatan', 'kabupaten.nama_kabupaten')
            ->where('id_pic_kelompok', $id)
            ->first();
        // nomor panitia
        $id_panitia = 'P' . str_pad($pic_kelompok->kabupaten, 2, '0', STR_PAD_LEFT) . '-' . str_pad($pic_kelompok->id_pic_kelompok, 5, '0', STR_PAD_LEFT);

        return view('pic_kelompok_ukulele.show', [
            'title' => 'Detail Data PIC Kelompok Ukulele',
            'data' => $pic_kelompok,
            'id_panitia' => $id_panitia
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('pic_kelompok_ukuleles')->where('id_pic_kelompok', $id)->first();

        $kelompok_ukulele = DB::table('kategori_kelompok_ukuleles')->get();
        $jenis_kelamin = DB::table('jenis_kelamin')->get();
        $kecamatan = DB::table('kecamatan')->get();
        $kabupaten = DB::table('kabupaten')->get();
        return view('pic_kelompok_ukulele.edit', [
            'title' => 'Form Edit Data PIC Kelompok Ukulele',
            'jenis_kelamin' => $jenis_kelamin,
            'kelompok_ukulele' => $kelompok_ukulele,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
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
            'email' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nama_kelompok_ukulele' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png,JPG,JPEG,PNG'
        ]);

        if ($request->file('foto')) {
            // upload
            $file = $request->file('foto');
            $namaFile = 'foto' . rand() . '.' . str_replace(" ", "", $file->getClientOriginalExtension());
            $file->move('file/pic_kelompok_ukulele/', $namaFile);

            // hapus foto lama
            @unlink('file/pic_kelompok_ukulele/' . $request->fotoLama);

            // insert ke database
            DB::table('pic_kelompok_ukuleles')->where('id_pic_kelompok', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'tlp' => $request->tlp,
                'alamat' => $request->alamat,
                'kecamatan' => $request->kecamatan,
                'kabupaten' => $request->kabupaten,
                'provinsi' => $request->provinsi,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nama_kelompok_ukulele' => $request->nama_kelompok_ukulele,
                'foto' => $namaFile
            ]);
            return redirect('pic_kelompok_ukulele')->with('sukses', 'Data Berhasil Diedit !');
        }

        // insert ke database
        DB::table('pic_kelompok_ukuleles')->where('id_pic_kelompok', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'tlp' => $request->tlp,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_kelompok_ukulele' => $request->nama_kelompok_ukulele,
            'foto' => $request->fotoLama
        ]);

        return redirect('pic_kelompok_ukulele')->with('sukses', 'Data Berhasil Diedit !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // hapus data
        DB::table('pic_kelompok_ukuleles')
            ->where('id_pic_kelompok', $id)
            ->delete();
        return back()->with('sukses', 'Data Berhasil Dihapus!');
    }
}
