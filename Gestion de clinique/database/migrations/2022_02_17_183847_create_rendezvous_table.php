<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezvousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendezvous', function (Blueprint $table) {
            $table->increments('numRDV');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('motifRV', 254)->nullable();
            $table->date('dateRV')->nullable();
            $table->string('heureRV', 254)->nullable();
            $table->string('etat')->default('en cours...');
            $table->string('typeAgent')->nullable();
        });

        //Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendezvous');
    }
}
