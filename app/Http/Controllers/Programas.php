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
        return view('programas.registro');
    }

    public function registrar(Request $r){
        $programas = new Programas();

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
