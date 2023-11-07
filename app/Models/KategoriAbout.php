<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAbout extends Model
{
    use HasFactory;
    protected $fillable = ['apa_yang_ada', 'deskripsi','icon'];
}
