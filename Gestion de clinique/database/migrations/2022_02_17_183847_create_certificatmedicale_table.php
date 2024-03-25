<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatmedicaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificatmedicale', function (Blueprint $table) {
            $table->integer('numCert');
            $table->integer('numCertMed');
            $table->integer('nbrJourRepo')->nullable();

            $table->primary(['numCert', 'numCertMed']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificatmedicale');
    }
}
