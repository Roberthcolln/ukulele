<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikTempat extends Model
{
    use HasFactory;
    protected $table = 'pemilik_tempats';
    protected $primaryKey = 'id_pemilik_tempat';
    public $timestamps = true;
    protected $fillable = [
        'nama_pemilik_tempat'
        
    ];
}
