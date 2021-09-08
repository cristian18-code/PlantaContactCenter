<?php

use App\Collaborator;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('collaborator_id');
            $table->foreign('collaborator_id')->references('id')->on('collaborators');

            $table->string('nivel');
            $table->string('titulo', 255);
            $table->enum('estado', ['Culminado', 'Aplazado', 'Estudiando']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('studies');
    }
}
