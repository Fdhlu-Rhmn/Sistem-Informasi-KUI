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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('Nama')->nullable();
            $table->string('NIM')->nullable();
            $table->string('Fakultas_Prodi')->nullable();
            $table->float('IPK')->nullable();
            $table->string('BIPA')->nullable();
            $table->string('Jenjang')->nullable();
            $table->string('Status')->nullable();
            $table->string('Angkatan')->nullable();
            $table->enum('Gender', ['L', 'P'])->nullable();
            $table->string('Alamat')->nullable();
            $table->string('No_Hp')->nullable();
            $table->string('Negara_Asal')->nullable();
            $table->string('Pendamping_Akademik')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};