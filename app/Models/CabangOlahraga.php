<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabangOlahraga extends Model
{
    use HasFactory;
    protected $table = 'cabang_olahraga';
    protected $primaryKey = 'id_cabang_olahraga';
    public $timestamps = true;
    protected $fillable = [
        'nama_cabang_olahraga',
        'logo   _cabang_olahraga'
        
    ];
}
