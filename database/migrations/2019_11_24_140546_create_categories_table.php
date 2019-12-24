<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kela_id');
            $table->string('tahun_ajaran');
            $table->string('keterangan', 7);
            $table->integer('biaya_semester');
            $table->integer('psb');
            $table->integer('pts_ganjil');
            $table->integer('pts_genap');
            $table->integer('spas');
            $table->integer('pat');
            $table->integer('raport');
            $table->integer('daftar_ulang');
            $table->integer('un')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
