<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicament', function (Blueprint $table) {
            $table->increments('idMed');
            $table->unsignedInteger('trait_id')->nullable();
            $table->foreign('trait_id')->references('numTrait')->on('traitements')->onDelete('cascade');
            $table->string('nomMed', 90)->nullable();
            $table->string('quantite', 20)->nullable();
            $table->string('posologie', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicament');
    }
}
