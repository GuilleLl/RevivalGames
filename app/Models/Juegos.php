<?php

namespace App\Models;

use App\Models\Criticas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function criticas(){
        return $this->hasMany(Criticas::class)->withTimestamps();;
    }


}
