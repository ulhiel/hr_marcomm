<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnsToAcaras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acaras', function (Blueprint $table) {
            $table->timestamp('tanggal_waktu')->nullable();

            $table->dropColumn('waktu');
            $table->dropColumn('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acaras', function (Blueprint $table) {
            
            $table->dropColumn('tanggal_waktu');

            $table->time('waktu');
            $table->date('tanggal');

        });
    }
}
