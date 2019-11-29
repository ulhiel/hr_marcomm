<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditToAcara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acaras', function (Blueprint $table) {
            
            $table->string('tempat_acara');
            $table->integer('jumlah_personil');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('s', function (Blueprint $table) {
            
            $table->dropColumn('tempat_acara');
            $table->dropColumn('jumlah_personil');

        });
    }
}
