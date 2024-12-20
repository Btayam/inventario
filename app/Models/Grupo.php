<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Linea; // Asegúrate de que esta línea esté incluida


class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'observacion', 'id_linea']; // Campos que se pueden asignar masivamente

    // Relación con la tabla 'lineas'
    public function linea()
    {
        return $this->belongsTo(Linea::class, 'id_linea'); // Define la relación con la tabla 'lineas'
    }
}