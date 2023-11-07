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
        Schema::create('ukuleles', function (Blueprint $table) {
            $table->id('id_peserta_ukulele');
            $table->string('nama_peserta_ukulele');
            $table->string('id_kabupaten_ukulele');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukuleles');
    }
};
