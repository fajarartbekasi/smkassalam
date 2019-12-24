<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('nip', 50);
            $table->string('alamat');
            $table->string('phone', 15);
            $table->string('tempat_lahir', 100);
            $table->string('tgl_lahir', 50);
            $table->string('agama', 50);
            $table->string('jenis_kelamin', 10);
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
        Schema::dropIfExists('gurus');
    }
}
