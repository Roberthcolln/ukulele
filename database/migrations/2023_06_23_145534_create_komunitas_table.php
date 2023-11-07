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
        Schema::create('komunitas', function (Blueprint $table) {
            $table->id('id_komunitas');
            $table->string('nama_komunitas');
            $table->integer('id_jenis_komunitas');
            $table->string('id_pic_komunitas');
            $table->string('deskripsi_komunitas');
            $table->string('provinsi_komunitas');
            $table->string('kota_komunitas');
            $table->string('alamat_komunitas');
            $table->string('link_maps_komunitas');
            $table->string('website_komunitas');
            $table->string('email_komunitas');
            $table->string('instagram_komunitas');
            $table->string('facebook_komunitas');
            $table->string('youtube_komunitas');
            $table->string('telepon_komunitas');
            $table->string('daftar_pengurus_komunitas');
            $table->string('logo_komunitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komunitas');
    }
};
