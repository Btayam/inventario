<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subgrupo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'observacion', 'id_tipos', 'id_lineas', 'id_grupos']; // Asegúrate de incluir los campos correctos

    // Relación con la tabla tipos
    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'id_tipos');
    }

    // Relación con la tabla lineas
    public function linea()
    {
        return $this->belongsTo(Linea::class, 'id_lineas');
    }

    // Relación con la tabla grupos
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'id_grupos'); // Asegúrate de usar 'id_grupos'
    }
}


