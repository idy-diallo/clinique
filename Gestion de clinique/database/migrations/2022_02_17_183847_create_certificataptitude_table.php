<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificataptitudeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificataptitude', function (Blueprint $table) {
            $table->integer('numCert');
            $table->integer('numCertApt');
            $table->string('professionPatient', 254)->nullable();

            $table->primary(['numCert', 'numCertApt']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificataptitude');
    }
}
