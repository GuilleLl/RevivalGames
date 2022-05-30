<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reseñas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReseñasController extends Controller
{
   
    public function index(){

        $reseñas = Reseñas::paginate(10);

        return view('admin.reseñas.index', compact("reseñas"));

    }

    public function destroy($id)
    {
        $reseña=Reseñas::find($id);
        $reseña->delete();
        return back()->with("success", __("¡Reseña eliminada!"));
    }
}
