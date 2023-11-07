<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArtisController;
use App\Http\Controllers\CetakKartuController;
use App\Http\Controllers\CetakKartuPesertaController;
use App\Http\Controllers\CetakSemuaPesertaController;
use App\Http\Controllers\CetakSemuaStikerUkuleleController;
use App\Http\Controllers\CetakStikerUkuleleController;
use App\Http\Controllers\CetekaSemuaPicController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DataAdmin;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\KategoriKelompokUkuleleController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PicKelompokUkuleleController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\PresensiPesertaController;
use App\Http\Controllers\PresensiUkuleleController;
use App\Http\Controllers\SponsorShipController;
use App\Http\Controllers\UkuleleController;
use App\Http\Controllers\WilayahParticipantController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', LandingPageController::class);
Route::resource('contact', ContactUsController::class);
Route::resource('registrasi', RegistrasiController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('dashboard', DashboardController::class);

    Route::resource('setting', SettingController::class);

    Route::resource('data_admin', DataAdmin::class);

    Route::resource('kategori_komunitas', KategoriKomunitasController::class);
    
    Route::resource('kategori_kelompok', KategoriKelompokUkuleleController::class);

    Route::resource('pic_kelompok_ukulele', PicKelompokUkuleleController::class);

    Route::resource('peserta', PesertaController::class);

    Route::resource('ukulele', UkuleleController::class);

    Route::resource('cetak_kartu', CetakKartuController::class);

    Route::resource('cetak_stiker_ukulele', CetakStikerUkuleleController::class);

    Route::resource('cetak_kartu_peserta', CetakKartuPesertaController::class);

    Route::resource('cetak_semua_pic', CetekaSemuaPicController::class);

    Route::resource('cetak_semua_sctiker_ukulele', CetakSemuaStikerUkuleleController::class);

    Route::resource('cetak_semua_peserta', CetakSemuaPesertaController::class);

    Route::resource('presensi_pic', PresensiController::class);

    Route::resource('presensi_peserta', PresensiPesertaController::class);

    Route::resource('presensi_ukulele', PresensiUkuleleController::class);

    Route::resource('event', EventController::class);

    Route::resource('about_us', AboutUsController::class);

    Route::resource('artis', ArtisController::class);

    Route::resource('sponsorship', SponsorShipController::class);

    Route::resource('wilayah_participant', WilayahParticipantController::class);

});
