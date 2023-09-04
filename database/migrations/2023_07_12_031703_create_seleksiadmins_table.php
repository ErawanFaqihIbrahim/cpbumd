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
        Schema::create('seleksiadmin', function (Blueprint $table) {
            $table->id();
            $table->date('tglseleksiadm');
            $table->date('tglpengumumanadm');
            $table->date('tglseleksiassess');
            $table->string('lokasiassess');
            $table->date('tglpengumumanassess');
            $table->date('tglseleksiwawan');
            $table->string('lokasiwawan');
            $table->date('tglpengumumanwawan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seleksiadmin');
    }
};
