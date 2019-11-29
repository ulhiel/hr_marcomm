<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acaras', function (Blueprint $table) {
            $table->bigIncrements('acara_id');
            $table->timestamps();
            $table->string('acara_nama');
            $table->unsignedBigInteger('prioritas_id');
            $table->date('tanggal');
            $table->time('waktu');

            $table->foreign('prioritas_id')->references('prioritas_id')->on('prioritas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acaras');
    }
}
