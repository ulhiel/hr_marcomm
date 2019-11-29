<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->unsignedBigInteger('divisi_id');
            $table->unsignedBigInteger('jurusan_id');
            $table->integer('kegiatan_ringan');
            $table->integer('kegiatan_sedang');
            $table->integer('kegiatan_berat');
            $table->integer('total_poin');

            $table->foreign('divisi_id')->references('divisi_id')->on('divisis');
            $table->foreign('jurusan_id')->references('jurusan_id')->on('jurusans');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropColumn('divisi_id');
            $table->dropColumn('jurusan_id');
            $table->dropColumn('kegiatan_ringan');
            $table->dropColumn('kegiatan_sedang');
            $table->dropColumn('kegiatan_berat');
            $table->dropColumn('total_poin');
            
        });

    }
}
