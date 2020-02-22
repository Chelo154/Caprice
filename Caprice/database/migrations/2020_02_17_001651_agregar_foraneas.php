<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarForaneas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       
        
        Schema::enableForeignKeyConstraints();
        Schema::table('orderDetail', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('product');
        });
        Schema::table('order', function (Blueprint $table) {
            /*Foraneas*/
           $table->unsignedBigInteger('bar_id');
            $table->foreign('bar_id')->references('id')->on('bar');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employee');
        });
        Schema::table('users', function (Blueprint $table) {
            /*Foraneas*/
            $table->unsignedBigInteger('id_empleado');
            $table->foreign('id_empleado')->references('id')->on('employee')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
