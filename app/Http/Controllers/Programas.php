<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Programa;

class Programas extends Controller
{
    //
    public function index(){
        $programas = DB::table('programas')->get();
        return view('programas.listado', ['programas'=>$programas]);
    }

    public function form_registro(){
        $facultades = DB::table('facultades')->get();
        return view('programas.registro', ['facultades'=>$facultades]);
    }

    public function registrar(Request $r){
        $programas = new Programa();

        $programas->codPrograma = $r->input('codprograma');
        $programas->nomPrograma = $r->input('nomprograma');
        $programas->facultad = $r->input('codfacultad');

        $programas->save();

        return redirect()->route('listadoProg');

    }

    public function eliminar ($id){
        $programa = Programa::findOrFail($id);
        $programa->delete();
        return redirect()->route('listadoProg');
    }
}
