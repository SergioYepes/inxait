<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('concursantes', function(Blueprint $table){
            $table->bigIncrements("id");

            $table->string('nombre');
            $table->string('apellido');
            $table->BigInteger('cedula');
            $table->string('departamento');
            $table->string('ciudad');
            $table->BigInteger('celular');
            $table->string('correo');
            $table->enum('habeas_data',['0','1'] )->default('0');
            
            
            $table->timestamp(true);
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('concursantes');
    }
};
