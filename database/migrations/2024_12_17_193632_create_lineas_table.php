<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineasTable extends Migration
{
    public function up()
    {
        Schema::create('lineas', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nombre'); // Campo nombre
            $table->text('observacion')->nullable(); // Campo observación opcional
            
            // Relación con la tabla tipos
            $table->unsignedBigInteger('tipo_id'); // Clave foránea
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
            
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('lineas');
    }
}
