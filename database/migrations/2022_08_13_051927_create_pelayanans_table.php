<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->string('id_pel',4)->primary();
            $table->string('id_user',4);
            $table->string('id_kelas',4);
            $table->string('id_talent',4);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_kelas')->references('id_kelas')->on('classes');
            $table->foreign('id_talent')->references('id_talent')->on('talents');
            $table->date('tanggal_pelayanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelayanan');
    }
}
