<?php

namespace App\Http\Controllers\Admin;

use App\Models\Criticas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCriticasController extends Controller
{
   
    public function index(){

        $criticas = Criticas::paginate(10);

        return view('admin.criticas.index', compact("criticas"));

    }

    public function destroy($id)
    {
        $critica=Criticas::find($id);
        $critica->delete();
        return back();
    }
}
