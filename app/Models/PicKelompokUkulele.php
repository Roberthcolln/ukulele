<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PicKelompokUkulele extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'tlp',
        'alamat',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'nama_kelompok_ukulele',
        'foto'
    ];
}
