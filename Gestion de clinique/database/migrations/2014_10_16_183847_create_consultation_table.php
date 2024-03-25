<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation', function (Blueprint $table) {
            $table->increments('numConsult');
            //$table->integer('numCert')->nullable()->index('FK_produire');
            /* start foreign */
            $table->unsignedInteger('patient_id')->nullable();
            $table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('agent_id')->nullable();
            $table->foreign('agent_id')->references('id')->on('users')->onDelete('cascade');
            /* end foreign */
            $table->string('motifCons', 254)->nullable();
            $table->string('histoireMal', 254)->nullable();
            $table->string('taille', 10, 0)->nullable();
            $table->float('poids', 10, 0)->nullable();
            $table->string('tension', 10, 0)->nullable();
            $table->float('temperature', 10, 0)->nullable();
            $table->string('resumeSynd', 254)->nullable();
            $table->string('diagnostique', 254)->nullable();
            $table->string('evolution', 254)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultation');
    }
}
