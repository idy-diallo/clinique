<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lier', function (Blueprint $table) {
            $table->integer('idUser');
            $table->integer('matriculeMed');
            $table->integer('numRDV')->index('FK_lier');

            $table->primary(['idUser', 'matriculeMed', 'numRDV']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lier');
    }
}
