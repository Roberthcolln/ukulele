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
        Schema::create('pelatihs', function (Blueprint $table) {
            $table->id('id_pelatih');
            $table->integer('id_cabang_olahraga_pelatih');
            $table->string('nama_pelatih');
            $table->string('deskripsi_pelatih');
            $table->string('provinsi_pelatih');
            $table->string('kota_pelatih');
            $table->string('alamat_pelatih');
            $table->string('link_maps_pelatih');
            $table->string('website_pelatih');
            $table->string('email_pelatih');
            $table->string('ig_pelatih');
            $table->string('fb_pelatih');
            $table->string('youtube_pelatih');
            $table->string('telp_pelatih');
            $table->string('foto_pelatih');
            $table->string('id_badan_olahraga_pelatih');
            $table->string('jabatan_badan_olahraga_pelatih');
            $table->string('id_komunitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihs');
    }
};
