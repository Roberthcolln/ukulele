<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    use HasFactory;
    protected $table = 'tempat';
    protected $primaryKey = 'id_tempat';
    public $timestamps = true;
    protected $fillable = [
        
        'nama_tempat',
        'deskripsi_tempat',
        'id_jenis_tempat',
        'id_pemilik_tempat',
        'alamat_tempat',
        'long_tempat',
        'lat_tempat',
        'website_tempat',
        'email_tempat',
        'ig_tempat',
        'fb_tempat',
        'telpon_tempat	',
        'logo_tempat',
        'foto_tempat_depan',
        'foto_tempat_dalam',
        'foto_tempat_samping',
        'id'
        
        
    ];
}
