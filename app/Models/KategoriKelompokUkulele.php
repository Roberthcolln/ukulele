<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKelompokUkulele extends Model
{
    use HasFactory;

    protected $table = 'kategori_kelompok_ukuleles';
    protected $fillable = ['nama_kelompok_ukulele'];
}
