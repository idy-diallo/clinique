<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription', function (Blueprint $table) {
            $table->increments('idPres');
            $table->unsignedInteger('consul_id')->nullable();
            $table->foreign('consul_id')->references('numConsult')->on('consultation')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('datePres')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescription');
    }
}
