<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regnotas', function (Blueprint $table) {
            // !Clave compuesta
            $table->char('estudiante',4);
            $table->char('materia',2);
            $table->char('profesor',2);
            // !Atributos
            $table->float('parcial1', 5, 2);
            $table->float('parcial2', 5, 2);
            $table->float('efinal', 5, 2);
            $table->float('nfinal', 5, 2);
            $table->char('estado',1);
            
            // !Modificadores
            $table->primary(['estudiante', 'materia', 'profesor']);

            $table->foreign('estudiante')
                ->references('codestudiante')->on('estudiantes');

            $table->foreign('materia')
                ->references('codmateria')->on('materias');

            $table->foreign('profesor')
                ->references('codprofesor')->on('profesores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regnotas');
    }
};
