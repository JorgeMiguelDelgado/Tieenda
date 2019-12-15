<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_categoria');
            $table->string('email');
            $table->String('codigo');
            $table->String('nombre');
            $table->integer('cantidad');
            $table->String('descripcion');
            $table->String('imagen');
            $table->String('estado');
            $table->foreign('id_categoria')->references('id')->on('categoria');
            
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
        Schema::dropIfExists('productos');
    }
}
