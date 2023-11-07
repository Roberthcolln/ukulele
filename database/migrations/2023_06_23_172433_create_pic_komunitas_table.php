<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pic_komunitas', function (Blueprint $table) {
            $table->id();
            $table->string('alamat_pic_komunitas');
            $table->string('tlp_pic_komunitas');
            $table->string('tempat_lahir_pic_komunitas');
            $table->string('tanggal_lahir_pic_komunitas');
            $table->string('jenis_kelamin_pic_komunitas');
            $table->string('foto_pic_komunitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pic_komunitas');
    }
};
