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
        Schema::create('detail_kost', function (Blueprint $table) {
            $table->id();
            $table->string('namaKos');
            $table->string('lokasiKos');
            $table->string('hargaKos',);
            $table->text('fasilitas');
            $table->text('aturanKos');
            $table->string('gmapsKos');
            $table->string('tagKos');
            $table->string('gambarKos');
            $table->timestamps();
        });
            }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kosts');
    }
};
