<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Estudiante;
use App\Models\Ciudad;
use App\Models\Barrio;
use App\Models\Programa;

class Estudiantes extends Controller
{
    
    public function index(){
        $estu = DB::table('estudiantes')->get();

        // Barrio
        $barrios = DB::table('barrios')->get();
        $ciudades = DB::table('ciudades')->get();
        $programas = DB::table('programas')->get();
        $estudiantes=[];
        foreach ($estu as $e) {
            $codigoBarrio = $e->barrio;
            $codigoCiudad = $e->ciudad;
            $codigoPrograma = $e->programa;

            $nombarrio = $barrios->where('codbarrio', $codigoBarrio)->first()->nombarrio;
            $nomciudad = $ciudades->where('codciudad', $codigoCiudad)->first()->nomciudad;
            $nomprograma = $programas->where('codPrograma', $codigoPrograma)->first()->nomPrograma;
            
            $e->barrio = $nombarrio;
            $e->programa = $nomprograma;
            $e->ciudad = $nomciudad;
            $estudiantes[] = $e;
        }
    
        return view('estudiantes.listado',['estudiantes'=>$estudiantes]);
    }

    public function form_registro(){
        $ciudades = DB::table('ciudades')->get();
        $barrios = DB::table('barrios')->get();
        $programas = DB::table('programas')->get();
        return view('estudiantes.registro',compact('ciudades', 'barrios', 'programas'));
    }

    public function registrar(Request $r){
        $estudiante = new Estudiante();

        $estudiante->codestudiante = $r->input('codestudiante');
        $estudiante->nomestudiante = $r->input('nomestudiante');
        $estudiante->edaestudiante = $r->input('edaestudiante');
        $estudiante->fechestudiante = $r->input('fechestudiante');
        $estudiante->sexestudiante = $r->input('sexestudiante');
        $estudiante->ciudad = $r->input('ciudad');
        $estudiante->barrio = $r->input('barrio');
        $estudiante->programa = $r->input('programa');

        $estudiante->save();

        return redirect()->route('listadoEst');

    }

    public function eliminar ($id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('listadoEst');
    }
}
