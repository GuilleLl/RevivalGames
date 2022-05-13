<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseñas extends Model
{
    use HasFactory;

    protected $fillable = [
        'Descripcion_Reseña',
        'Valoracion',
    ];
    public function juegos(){
        return $this->belongsTo(Juegos::class)->withTimestamps();
    }
    public function users(){
        return $this->belongsTo(User::class)->withTimestamps();
    }
}
