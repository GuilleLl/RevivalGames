<?php

namespace App\Models;

use App\Models\User;
use App\Models\Juegos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Criticas extends Model
{
    use HasFactory;

    protected $fillable = [
        'Descripcion_critica',
        'Valoracion',
        'id_juegos',
        'id_usuario'
    ];
    public function juegos(){
        return $this->belongsTo(Juegos::class)->withTimestamps();;
    }
    public function users(){
        return $this->belongsTo(User::class)->withTimestamps();;
    }

}
