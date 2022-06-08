<?php

namespace App\Http\Controllers;

use App\Models\Juegos;
use App\Models\Criticas;
use Illuminate\Http\Request;

class JuegosController extends Controller
{
    public function mostrarJuegos()
    {
        $juegos = Juegos::paginate(10);
        return view("juegos.index", compact("juegos"));
    }

    public function mostrarJuego($id)
    {
        $juego = Juegos::find($id);

        $criticas = Criticas::all();
        $criticasMostrar = [];
        foreach ($criticas as $critica) {
            if ($critica->id_juegos == $id) {
                array_push($criticasMostrar, $critica);
            }
        }



        return view('juegos.juego', compact("juego", "criticasMostrar"));
    }

    
}
