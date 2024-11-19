<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDetailKostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_kost', function (Blueprint $table) {
            // Mengubah tipe data fasilitas dan aturan menjadi VARCHAR
            $table->string('fasilitas', 255)->change();
            $table->string('aturanKos', 255)->change();

            // Menambahkan kolom baru tagKos dan gmapsKos
            $table->string('tagKos')->nullable();
            $table->string('gmapsKos')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_kost', function (Blueprint $table) {
            // Mengembalikan perubahan tipe data
            $table->text('fasilitas')->change();
            $table->text('aturan')->change();

            // Menghapus kolom baru
            $table->dropColumn('tagKos');
            $table->dropColumn('gmapsKos');
        });
    }
}
