<?php

namespace App\Http\Controllers;

use App\Models\Juegos;
use App\Models\Criticas;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Illuminate\Pagination\LengthAwarePaginator;


class CriticasController extends Controller
{

    public function index()
    {
        $id = Auth::user()->id;
        $criticas = Criticas::all();
        $criticasMostrar = [];
        $notfound = false;
        if(count($criticas)>0){
            
            foreach ($criticas as $critica) {
                if ($critica->id_usuario == $id) {
                    array_push($criticasMostrar, $critica);
                }
            }
    
            
        }else{
            $notfound = true;
            
        }
        return view("criticas.index", compact("criticasMostrar","notfound"));
    }

    public function createCritica($idJuego)
    {
        $juego = Juegos::find($idJuego);
        $comprobacion = '';

        $criticas = Criticas::all();
        $criticasComprobar = [];
        foreach ($criticas as $critica) {
            if ($critica->id_juegos == $idJuego) {
                array_push($criticasComprobar, $critica);
            }
        }
        
        foreach($criticasComprobar as $criticas){
            
            if(Auth::user()->id == $criticas->id_usuario){
               $comprobacion = 'Yahizocritica';
                
            }
        }

        if($comprobacion !== 'Yahizocritica'){
            
            $critica = new Criticas;
            $title = __("Añadir Critica");
            $textButton = __("Añadir");
            $route = url("criticas/store/$idJuego");
            return view("criticas.create", compact("title", "textButton", "route", "critica"));
        }else{return Redirect::back()->withErrors(['', 'msg']);}
         
            
    }

    public function store(Request $request,$idJuego)
    {
        $idUsuario = Auth::user()->id;


            $request->validate([
                "Descripcion" => "required|max:140|string",
                "Valoracion" => "required|min:0|max:10|integer",
            ]);


                Criticas::create([
                    'Descripcion_critica' => $request->input('Descripcion'),
                    'Valoracion' => $request->input('Valoracion'),
                    'id_juegos' => $idJuego,
                    'id_usuario' => $idUsuario,
                ]);

                return redirect(url("juegos",$idJuego));
          


    }

}
