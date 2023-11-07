<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiAtlit extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_prestasi_atlit';
    protected $fillable = ['id', 'nama_kejuaraan', 'tingkat_kejuaraan', 'peringkat_kejuaraan', 'foto_sertifikat', 'tahun_kejuaraan'];

}
