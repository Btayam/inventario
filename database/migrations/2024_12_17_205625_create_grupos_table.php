<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nombre'); // Campo nombre
            $table->text('observacion')->nullable(); // Campo observación opcional
            
            // Relación con la tabla lineas
            $table->unsignedBigInteger('id_linea'); // Clave foránea
            $table->foreign('id_linea')->references('id')->on('lineas')->onDelete('cascade');
            
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
