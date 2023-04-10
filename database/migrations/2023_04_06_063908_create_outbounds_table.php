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
        Schema::create('outbounds', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Negara_Tujuan');
            $table->string('Institusi_Tujuan');
            $table->string('Nama_Program');
            $table->string('Durasi');
            $table->string('Email');
            $table->string('Prodi');
            $table->string('Fakultas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outbounds');
    }
};
