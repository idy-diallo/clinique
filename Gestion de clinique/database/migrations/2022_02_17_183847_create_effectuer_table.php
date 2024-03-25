<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEffectuerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('effectuer', function (Blueprint $table) {
            $table->integer('idUser');
            $table->integer('matriculeMed');
            $table->integer('numConsultation')->index('FK_effectuer');

            $table->primary(['idUser', 'matriculeMed', 'numConsultation']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('effectuer');
    }
}
