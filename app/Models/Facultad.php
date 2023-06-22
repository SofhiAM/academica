<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    // El modelo va a tomar control de la tabla llamada facultades
    protected $table = 'facultades';

    // Se debe especificar la llave primaria
    protected $primaryKey = 'codFacultad';

    // Los timestamps sirven para llevar control de la fecha y hora en que fueron 
    // ingresados los datos, siempre y cuando se llenen x medio de un formulario,
    // no mediante seeders
    
    // Para decir que se los pone
    public $timestamps = true; 
}
