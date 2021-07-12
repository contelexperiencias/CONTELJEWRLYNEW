<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarruselGaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrusel_galerias', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('descripcion',200);
            $table->string('urlfoto',100);
            $table->string('codigo',50);
            $table->string('link',100)->nullable();
            $table->integer('orden')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrusel_galerias');
    }
}
