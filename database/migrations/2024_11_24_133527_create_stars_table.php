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
        Schema::create('stars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mentor');
            $table->string('email');
            $table->string('sekolah');
            $table->string('status');
            $table->string('id_tanya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stars');
    }
};