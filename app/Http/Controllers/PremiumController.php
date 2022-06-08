<?php

namespace App\Http\Controllers;

use App\Models\Criticas;
use Illuminate\Http\Request;

class PremiumController extends Controller
{
    public function index()
    {
        return view("premium.index");
    }

}