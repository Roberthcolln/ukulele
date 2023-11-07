<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukulele extends Model
{
    use HasFactory;
    protected $fillable = ['nama_peserta', 'id_ukulele'];
}
