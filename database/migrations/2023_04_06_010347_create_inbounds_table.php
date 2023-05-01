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
        Schema::create('inbounds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('institusi_asal');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('negara_asal');
            $table->string('program');
            $table->string('durasi_program');
            $table->string('email');
            $table->string('PIC');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inbounds');
    }
};