<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('slug',250);
            $table->date('dia');
            $table->string('description',155);
            $table->string('nombre',50);
            $table->text('descripcion');
            $table->string('urlfoto',50)->default("foto.jpg");
            $table->string('hora');
            $table->string('lugar',155);
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
