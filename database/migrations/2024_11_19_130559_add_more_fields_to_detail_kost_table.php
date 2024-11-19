<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldsToDetailKostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_kost', function (Blueprint $table) {
            $table->string('fasilitas1')->nullable();
            $table->string('fasilitas2')->nullable();
            $table->string('fasilitas3')->nullable();
            $table->string('fasilitas4')->nullable();
            $table->string('fasilitas5')->nullable();

            $table->string('aturan1')->nullable();
            $table->string('aturan2')->nullable();
            $table->string('aturan3')->nullable();
            $table->string('aturan4')->nullable();
            $table->string('aturan5')->nullable();

            $table->string('gambarKos1')->nullable();
            $table->string('gambarKos2')->nullable();
            $table->string('gambarKos3')->nullable();
            $table->string('gambarKos4')->nullable();
            $table->string('gambarKos5')->nullable();
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
            $table->dropColumn('fasilitas1');
            $table->dropColumn('fasilitas2');
            $table->dropColumn('fasilitas3');
            $table->dropColumn('fasilitas4');
            $table->dropColumn('fasilitas5');

            $table->dropColumn('aturan1');
            $table->dropColumn('aturan2');
            $table->dropColumn('aturan3');
            $table->dropColumn('aturan4');
            $table->dropColumn('aturan5');

            $table->dropColumn('gambarKos1');
            $table->dropColumn('gambarKos2');
            $table->dropColumn('gambarKos3');
            $table->dropColumn('gambarKos4');
            $table->dropColumn('gambarKos5');
        });
    }
}

