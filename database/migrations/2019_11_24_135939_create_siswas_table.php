<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis', 50)->unique();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('wsiswa_id');
            $table->unsignedInteger('kela_id');
            $table->string('phone', 15);
            $table->string('alamat');
            $table->string('tempat_lahir', 100);
            $table->string('tgl_lahir');
            $table->string('agama', 50);
            $table->string('jenis_kelamin', 10);
            $table->string('status', 15);
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
        Schema::dropIfExists('siswas');
    }
}
