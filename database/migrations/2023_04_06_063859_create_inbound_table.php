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
        Schema::create('inbound', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('NIM');
            $table->string('Fakultas_Prodi');
            $table->float('IPK');
            $table->string('BIPA');
            $table->string('Jenjang');
            $table->string('Status');
            $table->integer('Angkatan');
            $table->string('Gender');
            $table->string('Alamat');
            $table->string('No_Hp');
            $table->string('Negara_Asal');
            $table->string('Pendamping_Akademik');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inbound');
    }
};
