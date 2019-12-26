<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWsiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wsiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('nama_orangtua', 100);
            $table->string('alamat_orangtua');
            $table->string('jenis_kelamin_orangtua', 15);
            $table->string('pekerjaan_orangtua', 100);
            $table->string('no_telp', 15);
            $table->string('tempat_lahir_orangtua', 100);
            $table->string('tgl_lahir_orangtua');
            $table->string('agama_orangtua', 50);
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
        Schema::dropIfExists('wsiswas');
    }
}
