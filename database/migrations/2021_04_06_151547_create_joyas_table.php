<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joyas', function (Blueprint $table) {
            $table->id();
            $table->string('slug',50);
            $table->string('title',67);
            $table->string('nombre',50);
            $table->text('descripcion');
            $table->string('urlfoto',50)->default("foto.jpg");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('joyas');
    }
}
