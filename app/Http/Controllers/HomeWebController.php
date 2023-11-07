 <?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = DB::table('galeri')->get();
        $visi = DB::table('visi')->get();
        $misi = DB::table('misi')->get();
        return view('landing_page.index', [
            'title' => 'Beranda',
            'galeri' => $galeri,
            'visi' => $visi,
            'misi' => $misi

        ]);
    }
    public function tentang()
    {
        $konf = DB::table('setting')->first();
        $region = DB::table('region')->count();
        $chapter = DB::table('chapter')->count();
        $community = DB::table('community')->count();
        $misi = DB::table('misi')->get();
        $visi = DB::table('visi')->get();
        $user = User::count();
        return view('tentang', compact('konf', 'community', 'misi', 'visi', 'region', 'chapter', 'user'));
    }
    public function news()
    {
        $konf = DB::table('setting')->first();
        $berita = DB::table('berita')
            ->join('kategori_berita', 'berita.id_kategori_berita', 'kategori_berita.id_kategori_berita')
            ->orderByDesc('berita.id_berita')
            ->get();
        return view('news', compact('konf', 'berita'));
    }

    public function read($slug)
    {
        $konf = Setting::first();
        $baca = DB::table('berita')
            ->join('kategori_berita', 'berita.id_kategori_berita', 'kategori_berita.id_kategori_berita')
            ->where('slug_berita', $slug)
            ->first();
        $berita = DB::table('berita')
            ->join('kategori_berita', 'berita.id_kategori_berita', 'kategori_berita.id_kategori_berita')
            ->orderByDesc('berita.id_berita')
            ->limit(6)
            ->get();
        return view('read', compact('konf', 'baca', 'berita'));
    }

    public function agenda()
    {
        $konf = Setting::first();
        $keg = DB::table('kegiatan')
            ->join('kategori_kegiatan', 'kegiatan.id_kategori_kegiatan', 'kategori_kegiatan.id_kategori_kegiatan')
            ->join('sub_kategori_kegiatan', 'kegiatan.id_sub_kategori_kegiatan', 'sub_kategori_kegiatan.id_sub_kategori_kegiatan')
            ->orderByDesc('kegiatan.id_kegiatan')
            ->get();
        return view('agenda', compact('konf', 'keg'));
    }

    public function lihatagenda($slug)
    {
        $konf = Setting::first();
        $keg = DB::table('kegiatan')
            ->join('kategori_kegiatan', 'kegiatan.id_kategori_kegiatan', 'kategori_kegiatan.id_kategori_kegiatan')
            ->join('sub_kategori_kegiatan', 'kegiatan.id_sub_kategori_kegiatan', 'sub_kategori_kegiatan.id_sub_kategori_kegiatan')
            ->where('slug_kegiatan', $slug)
            ->first();

        $listagenda = DB::table('kegiatan')
            ->join('kategori_kegiatan', 'kegiatan.id_kategori_kegiatan', 'kategori_kegiatan.id_kategori_kegiatan')
            ->join('sub_kategori_kegiatan', 'kegiatan.id_sub_kategori_kegiatan', 'sub_kategori_kegiatan.id_sub_kategori_kegiatan')
            ->orderByDesc('kegiatan.id_kegiatan')
            ->limit(6)
            ->get();
        return view('lihat-agenda', compact('konf', 'keg', 'listagenda'));
    }

    public function daftaragenda($slug)
    {
        $konf = Setting::first();
        $keg = DB::table('kegiatan')
            ->join('kategori_kegiatan', 'kegiatan.id_kategori_kegiatan', 'kategori_kegiatan.id_kategori_kegiatan')
            ->join('sub_kategori_kegiatan', 'kegiatan.id_sub_kategori_kegiatan', 'sub_kategori_kegiatan.id_sub_kategori_kegiatan')
            ->where('slug_kegiatan', $slug)
            ->first();

        $listagenda = DB::table('kegiatan')
            ->join('kategori_kegiatan', 'kegiatan.id_kategori_kegiatan', 'kategori_kegiatan.id_kategori_kegiatan')
            ->join('sub_kategori_kegiatan', 'kegiatan.id_sub_kategori_kegiatan', 'sub_kategori_kegiatan.id_sub_kategori_kegiatan')
            ->orderByDesc('kegiatan.id_kegiatan')
            ->limit(6)
            ->get();
        return view('daftar-agenda', compact('konf', 'keg', 'listagenda'));
    }

    public function lihatgaleri()
    {
        $galeri = DB::table('galeri')
            ->where('kategori_galeri', '=', 'Galeri')
            ->orderByDesc('id_galeri')
            ->get();
        $konf = Setting::first();

        return view('lihat-galeri', compact('konf', 'galeri'));
    }

    public function lihatteam()
    {
        $tim = DB::table('users')->orderBy('id')->get();
        $konf = Setting::first();
        return view('lihat-team', compact('konf', 'tim'));
    }

    public function kontak()
    {
        $konf = Setting::first();
        return view('kontak', compact('konf'));
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
