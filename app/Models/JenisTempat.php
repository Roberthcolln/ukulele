<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTempat extends Model
{
    use HasFactory;
    protected $table = 'jenis_tempat';
    protected $primaryKey = 'id_jenis_tempat';
    public $timestamps = true;
    protected $fillable = [
        'nama_jenis_tempat'
        
    ];
}
