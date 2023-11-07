<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiWasit extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_prestasi_wasit';
    protected $fillable = ['id', 'nama_kejuaraan', 'tingkat_kejuaraan', 'peringkat_kejuaraan', 'foto_sertifikat', 'tahun_kejuaraan'];

}
