<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_prestasi';
    protected $fillable = ['id', 'nama_kejuaraan', 'tingkat_kejuaraan', 'peringkat_kejuaraan', 'foto_sertifikat', 'tahun_kejuaraan'];
}
