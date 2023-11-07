<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Chapter;
use App\Models\Community;
use App\Models\KategoriAdmin;
use App\Models\KategoriAnggota;
use App\Models\KategoriPengurus;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Pusat;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Anggota';
        $anggota = DB::table('users')
            ->join('kategori_anggota', 'users.id_kategori_anggota', 'kategori_anggota.id_kategori_anggota')
            ->get();
        return view('anggota.index', compact('title', 'anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agama = DB::table('agama')->get();
        $pekerjaan = DB::table('pekerjaan')->get();
        return view('anggota.create', [
            'title' => 'Registrasi',
            'agama' => $agama,
            'pekerjaan' => $pekerjaan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:8',
            'no_hp' => 'required',
            'id_provinsi' => 'required',
            'id_kota' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'id_kategori_anggota' => 'required',
            'nik' => 'required',
            'id_pusat' => 'required',
            'id_region' => 'required',
            'id_chapter' => 'required',
            'id_community' => 'required'
        ]);

        $foto = $request->file('foto');
        $namafoto = 'Foto' . date('Ymdhis') . '.' . $request->file('foto')->getClientOriginalExtension();
        $foto->move('file/foto/', $namafoto);

        $kategori = DB::table('kategori_anggota')->where('id_kategori_anggota', $request->id_kategori_anggota)->first();
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->no_hp = $request->no_hp;
        $data->id_provinsi = $request->id_provinsi;
        $data->id_kota = $request->id_kota;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->id_kategori_anggota = $request->id_kategori_anggota;
        $data->status = 'Verifikasi';
        $data->nik = $request->nik;
        $data->id_kategori_pengurus = $request->id_kategori_pengurus;
        $data->id_kategori_admin = $request->id_kategori_admin;
        $data->jabatan = $request->jabatan;
        $data->id_pusat = $request->id_pusat;
        $data->id_region = $request->id_region;
        $data->id_chapter = $request->id_chapter;
        $data->id_community = $request->id_community;
        $data->foto = $namafoto;

        $data->save();
        return redirect()->route('anggota.index')->with('Sukses', 'Berhasil Tambah Anggota Baru');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $anggota = DB::table('users')
            ->join('kategori_anggota', 'users.id_kategori_anggota', 'kategori_anggota.id_kategori_anggota')
            ->join('provinsi', 'users.id_provinsi', 'provinsi.id_provinsi')
            ->join('kota', 'users.id_kota', 'kota.id_kota')
            ->join('pusat', 'users.id_pusat', 'pusat.id_pusat')
            ->join('region', 'users.id_region', 'region.id_region')
            ->join('chapter', 'users.id_chapter', 'chapter.id_chapter')
            ->join('community', 'users.id_community', 'community.id_community')
            ->where('users.id', $id)
            ->first();
        $title = 'Detail Data';
        return view('anggota.show', compact('title', 'anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori_anggota = KategoriAnggota::all();
        $kategori_admin = KategoriAdmin::all();
        $kategori_pengurus = KategoriPengurus::all();
        $provinsi = Provinsi::all();
        $kota = Kota::all();
        $anggota = User::find($id);
        $pusat = Pusat::all();
        $region = Region::all();
        $chapter = Chapter::all();
        $community = Community::all();
        $title = 'Edit Anggota';
        return view('anggota.edit', compact('pusat', 'chapter', 'region', 'community', 'anggota', 'title', 'kategori_anggota', 'kategori_admin', 'kategori_pengurus', 'provinsi', 'kota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = User::findorfail($id);
        $namafoto = $data->foto;
        $kategori = DB::table('kategori_anggota')->where('id_kategori_anggota', $request->id_kategori_anggota)->first();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->id_provinsi = $request->id_provinsi;
        $data->id_kota = $request->id_kota;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->id_kategori_anggota = $request->id_kategori_anggota;
        $data->status = $data->status;
        $data->nik = $request->nik;
        $data->id_kategori_pengurus = $request->id_kategori_pengurus;
        $data->id_kategori_admin = $request->id_kategori_admin;
        $data->jabatan = $request->jabatan;
        $data->id_pusat = $request->id_pusat;
        $data->id_region = $request->id_region;
        $data->id_chapter = $request->id_chapter;
        $data->id_community = $request->id_community;
        $data->foto = $namafoto;

        if ($request->password != "") {
            $data->password         = Hash::make($request->password);
        }
        if ($request->foto != "") {
            $request->foto->move(public_path('file/foto/'), $namafoto);
        }
        $data->save();
        return redirect()->route('anggota.index')->with('Sukses', 'Berhasil Edit Data Anggota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $anggota = User::find($id);
        $anggota->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Anggota');
    }

    public function print($id)
    {
        $anggota = DB::table('users')
            ->join('kategori_anggota', 'users.id_kategori_anggota', 'kategori_anggota.id_kategori_anggota')
            ->join('region', 'users.id_region', 'region.id_region')
            ->join('chapter', 'users.id_chapter', 'chapter.id_chapter')
            ->where('users.id', $id)
            ->first();
        return view('anggota.cetak-kartu', compact('anggota'));
    }
}
