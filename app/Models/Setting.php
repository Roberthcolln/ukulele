<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'setting';
    protected $primaryKey = 'id_setting';
    public $timestamps = true;
    protected $fillable = [
        'pimpinan_setting',
        'logo_setting',
        'keyword_setting',
        'deskripsi_setting',
        'perusahaan_setting',
        'tentang_setting',
        'alamat_setting',
        'no_hp_setting',
        'email_setting',
        'maps_setting',
    ];
}
