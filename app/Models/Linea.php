<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    use HasFactory;

    protected $table = 'lineas';

    protected $fillable = ['linea', 'observacion', 'tipo_id'];

    // Relación: Una línea pertenece a un tipo
    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'tipo_id');
    }
}
