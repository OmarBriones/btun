<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConveniosEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios_empresa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('convenios_id');
            $table->unsignedBigInteger('empresa_id');
            $table->string('status')->nullable();
            $table->timestamps();
            
            
            
            $table->foreign('convenios_id')->references('id')->on('convenios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convenios_empresa');
    }
}
