<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Importar el modelo
use App\Models\Facultad;

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultades')->get();
        // Para enviar un arreglo a una vista se crea una variable $facultades
        // que reciben el arreglo de datos, y para enviarla a la vista se pone
        // primero la vista y despues el arreglo que lleva el contenido de $facultades
        return view('facultades.listado', ['facultades'=>$facultades]);
    }

    public function form_registro(){
        return view('facultades.prueba.registro');
    }

    public function registrar(Request $r){
        // $facultad es una instancia del objeto facultad que tiene el id y el nombre
        $facultad = new Facultad();

        // A traves de $r le digo que de los inputs me traiga los que se llaman codfacultad
        // y los asigne a la var correspondiente en la BD
        $facultad->codFacultad = $r->input('codfacultad');
        $facultad->nomFacultad = $r->input('nomfacultad');

        // Guardar los datos en la BD
        $facultad->save();

        // Redireccionar a una ruta. Cuando termine el proceso se refirije a listado 
        return redirect()->route('listadoFac');

    }

    public function eliminar ($id){
        // Buscar el dato que se va a borrar
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
        return redirect()->route('listadoFac');
    }
}
