<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BadanOlahraga extends Model
{
    use HasFactory;
    protected $table = 'badan_olahraga';
    protected $primaryKey = 'id_badan_olahraga';
    public $timestamps = true;
    protected $fillable = [
        'id_provinsi',
        'id_kota',
        'id_cabang_olahraga',
        'deskripsi_badan_olahraga',
        'nama_badan_olahraga',
        'alamat_badan_olahraga',
        'long_badan_olahraga',
        'lat_badan olahraga',
        'website_badan_olahraga',
        'email_badan_olahraga',
        'ig_badan_olahraga',
        'fb_badan_olahraga',
        'youtube_badan_olahraga',
        'telpon_badan_olahraga	',
        'logo_badan_olahraga',
        'daftar_pengurus',
        'jumlah_anggota_badan_olahraga',
        
    ];
}
