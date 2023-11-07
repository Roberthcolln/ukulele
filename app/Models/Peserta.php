<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $table = 'pesertas';
    protected $guarded = ['id_peserta_ukulele', 'created_at', 'updated_at'];
}
