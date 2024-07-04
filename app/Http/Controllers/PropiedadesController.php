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

    public function insertarPropiedades(){
        return view('insertarPropiedades');
    }
    
    public function guardarPropiedades(Request $request){
        $nvoPropiedad = new Propiedade();
        $nvoPropiedad->piso = $request->piso;
        $nvoPropiedad->area = $request->area;
        $nvoPropiedad->color = $request->color;
        $nvoPropiedad->idDuenio = $request->idDuenio;
        $nvoPropiedad->estado = $request->estado;
        $nvoPropiedad->save();

        return redirect('/propiedades/mostrar');
        
    }

    public function editarPropiedades($id){

        $propiedadEditar = Propiedade::find($id);
        return view('editarPropiedad', compact('propiedadEditar'));

    }

    public function editGuardarPropiedades(Request $request, $id ){
        $propiedadEditada = Propiedade::find($id);
        $propiedadEditada->piso = $request-> piso;
        $propiedadEditada->area = $request-> area;
        $propiedadEditada->color = $request-> color;
        $propiedadEditada->idDuenio = $request-> idDuenio;
        $propiedadEditada->estado = $request-> estado;
        $propiedadEditada->save();

        return redirect('/propiedades/mostrar');

    }

}
