<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Profesor;

class Profesores extends Controller
{
    public function index(){
        $profesores = DB::table('profesores')->get();
        return view('profesores.listado', ['profesores'=>$profesores]);
    }

    public function form_registro(){
        return view('profesores.registro');
    }

    public function registrar(Request $r){
        $profesor = new Profesor();

        $profesor->codprofesor = $r->input('codprofesor');
        $profesor->nomprofesor = $r->input('nomprofesor');
        $profesor->catprofesor = $r->input('catprofesor');

        $profesor->save();

        return redirect()->route('listadoProf');

    }

    public function eliminar ($id){
        $profesor = profesor::findOrFail($id);
        $profesor->delete();
        return redirect()->route('listadoProf');
    }
}
