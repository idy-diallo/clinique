<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssocierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associer', function (Blueprint $table) {
            $table->integer('numPatient');
            $table->integer('numRDV')->index('FK_associer');
            //$table->primary(['idUser', 'numPatient', 'numRDV']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associer');
    }
}
