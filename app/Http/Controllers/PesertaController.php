<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->id == 1) {
            $data = DB::table('pic_kelompok_ukuleles')
                ->join('pesertas', 'pesertas.id_pic_kelompok', '=', 'pic_kelompok_ukuleles.id_pic_kelompok')
                ->get();

            return view('peserta.index', [
                'title' => 'Data Peserta Ukulele',
                'data' => $data
            ]);
        }
        
        $data = DB::table('pic_kelompok_ukuleles')
            ->join('pesertas', 'pesertas.id_pic_kelompok', '=', 'pic_kelompok_ukuleles.id_pic_kelompok')
            ->where('pic_kelompok_ukuleles.id_pic_kelompok', Auth::user()->id)
            ->get();

        return view('peserta.index', [
            'title' => 'Data Peserta Ukulele',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kecamatan = DB::table('kecamatan')->get();
        $kabupaten = DB::table('kabupaten')->get();
        $jenis_kelamin = DB::table('jenis_kelamin')->get();
        $data_pic = DB::table('users')
            ->join('pic_kelompok_ukuleles', 'users.id', '=', 'pic_kelompok_ukuleles.id_pic_kelompok')
            ->where('pic_kelompok_ukuleles.id_pic_kelompok', Auth::user()->id)
            ->select('pic_kelompok_ukuleles.nama_kelompok_ukulele')
            ->first();
        $data = DB::table('pesertas')->where('id_pic_kelompok', Auth::user()->id)->get();
        return view('peserta.create', [
            'title' => 'Form Tambah Data Peserta',
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'data_pic' => $data_pic,
            'jenis_kelamin' => $jenis_kelamin,
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama_peserta' => 'required',
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

        // upload
        $file = $request->file('foto');
        $namaFile = 'foto' . rand() . '.' . str_replace(" ", "", $file->getClientOriginalExtension());
        $file->move('file/peserta/', $namaFile);

        DB::table('pesertas')->insert([
            'id_pic_kelompok' => Auth::user()->id,
            'nama_peserta' => $request->nama_peserta,
            'tlp_peserta' => $request->tlp,
            'alamat_peserta' => $request->alamat,
            'id_kecamatan_peserta' => $request->kecamatan,
            'id_kabupaten_peserta' => $request->kabupaten,
            'provinsi_peserta' => $request->provinsi,
            'tempat_lahir_peserta' => $request->tempat_lahir,
            'tanggal_lahir_peserta' => $request->tanggal_lahir,
            'jenis_kelamin_peserta' => $request->jenis_kelamin,
            'nama_kelompok_ukulele_peserta' => $request->nama_kelompok_ukulele,
            'foto_peserta' => $namaFile
        ]);

        DB::table('ukuleles')->insert([
            'nama_peserta_ukulele' => $request->nama_peserta,
            'id_kabupaten_ukulele' => $request->kabupaten
        ]);

        return redirect('peserta')->with('sukses', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('pic_kelompok_ukuleles')
            ->join('pesertas', 'pesertas.id_pic_kelompok', '=', 'pic_kelompok_ukuleles.id_pic_kelompok')
            ->where('id_peserta_ukulele', $id)
            ->first();

        $kecamatan = DB::table('kecamatan')->where('id_kecamatan', $data->id_kecamatan_peserta)->first();

        $kabupaten = DB::table('kabupaten')->where('id_kabupaten', $data->id_kabupaten_peserta)->first();

        // nomor panitia
        $id_peserta = 'P' . str_pad($data->kabupaten, 2, '0', STR_PAD_LEFT) . '-' . str_pad($data->id_peserta_ukulele, 5, '0', STR_PAD_LEFT);

        return view('peserta.show', [
            'title' => 'Detail Data Peserta Ukulele',
            'data' => $data,
            'id_peserta' => $id_peserta,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('pic_kelompok_ukuleles')
            ->join('pesertas', 'pesertas.id_pic_kelompok', '=', 'pic_kelompok_ukuleles.id_pic_kelompok')
            ->where('id_peserta_ukulele', $id)
            ->first();
        $kecamatan = DB::table('kecamatan')->get();
        $kabupaten = DB::table('kabupaten')->get();
        $jenis_kelamin = DB::table('jenis_kelamin')->get();
        $kelompok = DB::table('pic_kelompok_ukuleles');

        return view('peserta.edit', [
            'title' => 'Edit Data Peserta Ukulele',
            'data' => $data,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'kelompok' => $kelompok,
            'jenis_kelamin' => $jenis_kelamin
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
            $file->move('file/peserta/', $namaFile);

            DB::table('pesertas')->where('id_peserta_ukulele', $id)->update([
                'id_pic_kelompok' => Auth::user()->id,
                'nama_peserta' => $request->nama_peserta,
                'tlp_peserta' => $request->tlp,
                'alamat_peserta' => $request->alamat,
                'id_kecamatan_peserta' => $request->kecamatan,
                'id_kabupaten_peserta' => $request->kabupaten,
                'provinsi_peserta' => $request->provinsi,
                'tempat_lahir_peserta' => $request->tempat_lahir,
                'tanggal_lahir_peserta' => $request->tanggal_lahir,
                'jenis_kelamin_peserta' => $request->jenis_kelamin,
                'nama_kelompok_ukulele_peserta' => $request->nama_kelompok_ukulele,
                'foto_peserta' => $namaFile
            ]);
            return redirect('peserta')->with('sukses', 'Data Berhasil Diupdate !');
        }

        DB::table('pesertas')->where('id_peserta_ukulele', $id)->update([
            'id_pic_kelompok' => Auth::user()->id,
            'nama_peserta' => $request->nama_peserta,
            'tlp_peserta' => $request->tlp,
            'alamat_peserta' => $request->alamat,
            'id_kecamatan_peserta' => $request->kecamatan,
            'id_kabupaten_peserta' => $request->kabupaten,
            'provinsi_peserta' => $request->provinsi,
            'tempat_lahir_peserta' => $request->tempat_lahir,
            'tanggal_lahir_peserta' => $request->tanggal_lahir,
            'jenis_kelamin_peserta' => $request->jenis_kelamin,
            'nama_kelompok_ukulele_peserta' => $request->nama_kelompok_ukulele,
            'foto_peserta' => $request->fotoLama
        ]);

        return redirect('peserta')->with('sukses', 'Data Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pesertas')->where('id_peserta_ukulele', $id)->delete();
        return back()->with('sukses', 'Data Berhasil Dihapus !');
    }
}
