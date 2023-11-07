<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PicKomunitas extends Model
{
    use HasFactory;

    protected $table = 'pic_komunitas';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
