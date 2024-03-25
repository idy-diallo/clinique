<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->integer('idUser');
            $table->integer('numPatient');
            $table->dateTime('dateNaissance')->nullable();
            $table->string('adresse', 254)->nullable();
            $table->string('sexe', 254)->nullable();
            $table->integer('age')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('profession', 254)->nullable();

            $table->primary(['idUser', 'numPatient']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient');
    }
}
