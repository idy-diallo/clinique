<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociation12Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('association12', function (Blueprint $table) {
            $table->integer('idUser');
            $table->integer('numPatient');
            $table->integer('numRec')->index('FK_association12');

            $table->primary(['idUser', 'numPatient', 'numRec']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('association12');
    }
}
