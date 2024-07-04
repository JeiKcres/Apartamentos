<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedade;

class PropiedadesController extends Controller
{
    public function mostrarPropiedades(){
        $propiedades = Propiedade::all();
        return view('mostrarPropiedades', compact('propiedades'));

    }
}
