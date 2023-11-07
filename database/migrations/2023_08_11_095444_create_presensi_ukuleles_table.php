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
        Schema::create('presensi_ukuleles', function (Blueprint $table) {
                $table->id();
                $table->string('id_ukulele');
                $table->string('status_kehadiran');
                $table->string('waktu_presensi');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi_ukuleles');
    }
};
