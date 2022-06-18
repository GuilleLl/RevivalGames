<?php

namespace App\Http\Controllers\Admin;

use App\Models\Juegos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminJuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegos = Juegos::paginate(4);
        return view("admin.juegos.index", compact("juegos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $juego = new Juegos;
        $title = __("Añadir Juego");
        $textButton = __("Añadir");
        $route = route("juegos.store");
        return view("admin.juegos.create", compact("title", "textButton", "route", "juego"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "Nombre"=>"required|unique:juegos",
            "Genero" => "required|string",
            "Descripcion" => "required|string",
            "Fecha_salida" => "required|string",
            "Imagen"=> "required|image|mimes:jpg,gif,png,jpeg|"
           
        ]);
        Juegos::create([
            "Nombre"=>$request->input("Nombre"),
            "Genero" => $request->input("Genero"),
            "Descripcion" => $request->input("Descripcion"),
            "Fecha_salida" => $request->input("Fecha_salida"),
            'Imagen'=>$request->file("Imagen")->store('','images'),
        ]);
        return redirect(url("admin/juegos"))->withErrors(['', 'msg']);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $juego =Juegos::find($id);
        $update = true;
        $title = ("Editar Serie");
        $textButton = ("Actualizar");
        $route = route("juegos.update", $juego -> id);
        return view("admin.juegos.edit", compact("update", "title", "textButton", "route", "juego"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id) 
    {

        $this->validate($request, [
            "Nombre"=>"required",
            "Genero" => "required|string",
            "Descripcion" => "required|string",
            "Fecha_salida" => "required|string",
            "Imagen"=> "image|mimes:jpg,gif,png,jpeg|"
           
        ]);


        $juego = Juegos::find($id);
        $juego-> Nombre = $request->get('Nombre');
        $juego-> Genero = $request->get('Genero');
        $juego-> Descripcion = $request->get('Descripcion');
        $juego-> Fecha_salida = $request->get('Fecha_salida');
        if($request->hasFile('Imagen')){
                Storage::disk('images')->delete('images/'.$juego->Imagen);
                $juego->Imagen = $request->file('Imagen')->store('','images');
            }
        

        $juego-> save();
        return redirect(url("admin/juegos"))->withErrors(['', 'msg']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juegos $juego)
    {
        $juego->delete();
        return back()->withErrors(['', 'msg']);
    }

    public function _construct()
    {
        $this->middleware("auth");
    }
}
