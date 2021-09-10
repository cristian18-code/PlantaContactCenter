<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfFamiliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_familiers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('collaborator_id');
            $table->foreign('collaborator_id')->references('id')->on('collaborators');

            $table->string('nombre', 200);
            $table->date('fNacimiento');
            $table->enum('genero', ['Masculino', 'Femenino']);
            $table->string('ocupacion');
            $table->string('parentesco');
            $table->string('celular');
            $table->enum('emergencia', ['Si', 'No'])->default('No');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inf_familiers');
    }
}
