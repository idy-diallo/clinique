<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccin', function (Blueprint $table) {
            $table->increments('idVaccin');
            $table->unsignedInteger('pres_id')->nullable();
            $table->foreign('pres_id')->references('idPres')->on('prescription')->onDelete('cascade');
            $table->date('dateVaccin');
            $table->string('description', 254);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccin');
    }
}
