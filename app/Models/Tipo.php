<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $table = 'tipos';

    protected $fillable = ['nombre', 'observacion'];

    // Relación: Un tipo tiene muchas líneas
    public function lineas()
    {
        return $this->hasMany(Linea::class, 'tipo_id');
    }
}
