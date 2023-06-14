<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pending_inbounds', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Institusi_Asal');
            $table->string('Fakultas');
            $table->string('Prodi');
            $table->string('Negara_Asal');
            $table->string('Nama_Program');
            $table->string('Durasi_Program');
            $table->string('Email');
            $table->string('PIC');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_inbounds');
    }
};