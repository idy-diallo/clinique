<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentdesanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentdesante', function (Blueprint $table) {
            $table->integer('idUser');
            $table->integer('matriculeMed');
            $table->string('profile', 254)->nullable();

            $table->primary(['idUser', 'matriculeMed']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agentdesante');
    }
}
