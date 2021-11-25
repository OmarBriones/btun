<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('aPaterno');
            $table->string('aMaterno');
            $table->string('direccion');
            $table->string('cel');
            $table->integer('matricula');
            $table->unsignedBigInteger('carrera_id');
            $table->unsignedBigInteger('solicitud_id');
            $table->unsignedBigInteger('situacion_id');
            $table->unsignedBigInteger('sueldo_id'); 
            $table->unsignedBigInteger('user_id'); 
            $table->timestamps();
            
 
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('solicitud_id')->references('id')->on('tipo_solicituds')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('situacion_id')->references('id')->on('situacion_laborals')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sueldo_id')->references('id')->on('sueldos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfils');
    }
}
