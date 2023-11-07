<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    use HasFactory;

    protected $table = 'komunitas';
    protected $fillable = ['nama_komunitas', 'id_jenis_komunitas', 'id_pic_komunitas', 'deskripis', 'provinsi', 'kota', 'alamat', 'titik_koordinat', 'website', 'email', 'instagram', 'facebook', 'youtube', 'telepon', 'daftar_pengurus', 'logo'];
}
