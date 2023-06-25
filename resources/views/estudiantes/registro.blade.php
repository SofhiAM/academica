@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Estudiantes</h1>


@stop

@section('content')
    <div class="container">
        <!-- <div class="row"> -->
            <form action="{{url('/estudiantes/registrar')}}" method="post">
                @csrf
                <div class="col-mb-12 col-mb-9">
                    
                    <label class="form-label">Código</label>
                    <input type="text" name="codestudiante" id="codestudiante"  class="form-control"><br>
    
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nomestudiante" id="nomestudiante"  class="form-control"><br>

                    <label class="form-label">Edad</label>
                    <input type="number" name="edaestudiante" id="edaestudiante"  class="form-control"><br>

                    <label class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="fechestudiante" id="fechestudiante"  class="form-control"><br>

                    <div class="input-group mb-6">
                        <label class="input-group-text" for="inputGroupSelect01">Sexo</label>
                        <select class="form-select" id="sexestudiante" name="sexestudiante">
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div><br>
                    
                    <div class="input-group mb-6">
                        <label class="input-group-text" for="inputGroupSelect01">Ciudad</label>
                        <select class="form-select" id="ciudad" name="ciudad">
                            <option selected>Seleccione una ciudad</option>
                            @foreach($ciudades as $c)
                            <option value={{$c->codciudad}}>{{$c -> nomciudad}}</option>
                            @endforeach
                        </select>
                    </div><br>

                    <div class="input-group mb-6">
                        <label class="input-group-text" for="inputGroupSelect01">Barrio</label>
                        <select class="form-select" id="barrio" name="barrio">
                            <option selected>Seleccione un barrio</option>
                            @foreach($barrios as $b)
                            <option value={{$b->codbarrio}}>{{$b -> nombarrio}}</option>
                            @endforeach
                        </select>
                    </div><br>

                    <div class="input-group mb-6">
                        <label class="input-group-text" for="inputGroupSelect01">Programa</label>
                        <select class="form-select" id="programa" name="programa">
                            <option selected>Seleccione un programa</option>
                            @foreach($programas as $p)
                            <option value={{$p->codPrograma}}>{{$p -> nomPrograma}}</option>
                            @endforeach
                        </select>
                    </div>

                    
                </div>
                <br><button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        <!-- </div> -->
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
