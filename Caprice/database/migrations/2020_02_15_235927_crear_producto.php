<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Atributos*/
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',60);
            $table->integer('cantidad');
            $table->double('precio',10,2);
            $table->enum('tipo',['plato,bebida']);
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
        Schema::dropIfExists('product');
    }
}
