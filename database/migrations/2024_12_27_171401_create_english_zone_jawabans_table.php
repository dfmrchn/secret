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
        Schema::create('english_zone_jawabans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('sekolah');
            $table->string('kelas');
            $table->string('status');
            $table->string('jenjang_murid');
            $table->string('id_soal');
            $table->string('jawaban');
            $table->string('pilihan_ganda');
            $table->string('bobot_A');
            $table->string('bobot_B');
            $table->string('bobot_C');
            $table->string('bobot_D');
            $table->string('bobot_E');
            $table->string('no_soal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('english_zone_jawabans');
    }
};
