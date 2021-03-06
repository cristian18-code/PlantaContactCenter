<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_medicals', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('collaborator_id')->unique();
            $table->foreign('collaborator_id')->references('id')->on('collaborators');

            $table->string('eps')->nullable();
            $table->string('plan_mp')->default('N/A')->nullable();
            $table->string('alergias')->default('N/A')->nullable();
            $table->string('medicamentos')->default('N/A')->nullable();
            $table->longText('antecedentes')->nullable();
            $table->integer('peso')->length(20)->nullable();
            $table->string('estatura')->nullable();
            $table->string('rh', 50)->nullable();

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
        Schema::dropIfExists('inf_medicals');
    }
}
