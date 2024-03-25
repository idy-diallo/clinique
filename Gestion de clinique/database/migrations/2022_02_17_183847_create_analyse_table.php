<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse', function (Blueprint $table) {
            $table->increments('numAnalyse');
            $table->unsignedInteger('pres_id')->nullable();
            $table->foreign('pres_id')->references('idPres')->on('prescription')->onDelete('cascade');
            $table->string('typeAnalyse');
            $table->string('resultat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analyse');
    }
}
