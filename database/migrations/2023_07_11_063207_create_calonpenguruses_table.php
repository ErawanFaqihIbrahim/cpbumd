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
        Schema::create('calonpengurus', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->date('lahir');
            $table->enum('pendidikan', ['Diploma','Sarjana','Magister','Doktor']);
            $table->string('pengalaman');
            $table->string('referensi');
            $table->date('tglseleksiadm');
            $table->enum('hasiladm', ['Tidak Memenuhi Syarat','Memenuhi Syarat','Belum Mengirim Berkas' ]);
            $table->date('tglseleksiassess');
            $table->string('lokasiassess');
            $table->integer('nilaiassess');
            $table->date('tglseleksiwawan');
            $table->string('lokasiwawan');
            $table->integer('hasilwawan');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calonpengurus');
    }
};
