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
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesawat_id');
            $table->foreignId('bandaratujuan_id');
            $table->foreignId('bandaraasal_id');
            $table->string('nama');
            $table->decimal('harga_tiket', 10, 2);
            $table->dateTime('tanggal_keberangkatan');
            $table->time('jam_berangkat');
            $table->time('jam_tiba');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
