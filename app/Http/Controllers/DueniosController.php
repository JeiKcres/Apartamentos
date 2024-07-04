<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duenio;

class DueniosController extends Controller
{
    public function mostrarDuenios(){
        $duenios = Duenio::all();
        return view('mostrarDuenios', compact('duenios'));
    }

    public function insertarDuenio(){
        return view ('insertarDuenio');
    }

    public function guardarDuenio(Request $request){
        $nvoDuenio = new Duenio();
        $nvoDuenio->nombre = $request->nombre;
        $nvoDuenio->apellido = $request->apellido;
        $nvoDuenio->correo = $request->correo;
        $nvoDuenio->save();

        return redirect('/duenios/mostrar');
    }

    public function editarDuenio($id){

        $duenioEditar = Duenio::find($id);
        return view('editarDuenio', compact('duenioEditar'));

    }

    public function guardarDuenioEditado(Request $request, $id){
        $duenioEditado = Duenio::find($id);
        $duenioEditado->nombre = $request->nombre;
        $duenioEditado->apellido = $request->apellido;
        $duenioEditado->correo = $request->correo;
        $duenioEditado->save();

        return redirect('/duenios/mostrar');
    }

}
