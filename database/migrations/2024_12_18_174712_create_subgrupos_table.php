<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubgruposTable extends Migration
{
    public function up()
    {
        Schema::create('subgrupos', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('nombre'); // Campo nombre
            $table->text('observacion')->nullable(); // Campo observación opcional

            // Relación con la tabla tipos
            $table->unsignedBigInteger('id_tipos'); // Clave foránea para tipos
            $table->foreign('id_tipos')->references('id')->on('tipos')->onDelete('cascade');

            // Relación con la tabla líneas
            $table->unsignedBigInteger('id_lineas'); // Clave foránea para líneas
            $table->foreign('id_lineas')->references('id')->on('lineas')->onDelete('cascade');

            // Relación con la tabla grupos
            $table->unsignedBigInteger('id_grupos'); // Clave foránea para grupos
            $table->foreign('id_grupos')->references('id')->on('grupos')->onDelete('cascade');

            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('subgrupos');
    }
}


