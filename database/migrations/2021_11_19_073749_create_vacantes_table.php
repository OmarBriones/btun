<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('descripcion');
            $table->string('direccion');            
            $table->string('nameContacto');
            $table->string('mailContacto');
            $table->string('celContacto');
            $table->unsignedBigInteger('solicitud_id');
            $table->unsignedBigInteger('sueldo_id');
            $table->timestamps();
            
            
            $table->foreign('solicitud_id')->references('id')->on('tipo_solicituds')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sueldo_id')->references('id')->on('sueldos')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacantes');
    }
}
