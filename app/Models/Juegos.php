<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    use HasFactory;

    protected $fillable = [
            'Nombre',
            'Genero',
            'Descripcion',
            'Fecha_salida',
            'Imagen',
    ];
    public function reseñas(){
        return $this->hasMany(Reseñas::class)->withTimestamps();
    }
}
