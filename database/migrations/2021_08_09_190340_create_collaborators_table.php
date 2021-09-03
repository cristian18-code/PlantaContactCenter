<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborators', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('cedula')->unique();
            $table->string('nombre');

            $table->string('expedida')->nullable();
            $table->date('Fnacimiento')->nullable();
            $table->date('Fingreso');
            $table->date('finContrato')->nullable();
            $table->string('contrato');

            $table->string('supervisor');
            $table->string('campania');
            $table->string('cargoNomina');

            $table->string('llave')->nullable();
            $table->bigInteger('ceco')->nullable();
            $table->string('nomCeco')->nullable();
            $table->string('estado')->nullable()->default('ACTIVO');
            $table->bigInteger('sueldo');
            
            $table->float('distribucion', 8,1)->nullable();
            $table->string('site')->nullable();
            $table->integer('login')->nullable();
            $table->date('mes')->nullable();
            $table->string('tipo')->nullable();
            $table->enum('genero', ['Masculino', 'Femenino'])->nullable();
            $table->string('localidad')->nullable();
            $table->string('estrato')->nullable();
            $table->string('hijos')->nullable();
            $table->string('nivelEstudio')->nullable();
            $table->string('barrio')->nullable();
            $table->string('image')->nullable();;
            $table->string('periodosPendientes')->nullable();
            $table->enum('vacaciones', ['No programar', 'Tomadas', 'Programada'])->nullable();
            $table->date('Fdia_familia')->nullable();
            $table->string('mesDiaFamilia')->nullable();
            $table->enum('val_diaFamilia', ['Ok', 'Sin programar', 'Validar'])->nullable();

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
        Schema::dropIfExists('collaborators');
    }
}
