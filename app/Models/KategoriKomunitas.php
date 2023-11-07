<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKomunitas extends Model
{
    use HasFactory;
    protected $fillable = ['caption', 'deskripsi'];
}
