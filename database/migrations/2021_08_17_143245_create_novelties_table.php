<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoveltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novelties', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('collaborator_id');
            $table->foreign('collaborator_id')->references('id')->on('collaborators');
            $table->string('novedad', 255);
            $table->dateTime('Finicio');
            $table->dateTime('Ffin')->nullable();
            $table->string('observaciones')->nullable();
            $table->enum('estado', ['En curso', 'Cerrada'])->default('En curso');

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
        Schema::dropIfExists('novelties');
    }
}
