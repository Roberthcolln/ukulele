<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKomunitas extends Model
{
    use HasFactory;

    protected $table = 'jenis_komunitas';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
