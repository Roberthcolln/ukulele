<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PicTempat extends Model
{
    use HasFactory;

    protected $table = 'pic_tempats';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
