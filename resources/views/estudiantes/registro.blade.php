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
                    <input type="text" name="edaestudiante" id="edaestudiante"  class="form-control"><br>

                    <label class="form-label">Edad</label>
                    <input type="text" name="edaestudiante" id="edaestudiante"  class="form-control"><br>

                    <label class="form-label">Fecha de nacimiento</label>
                    <input type="text" name="edaestudiante" id="edaestudiante"  class="form-control"><br>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciudad
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Barrio
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Programa
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
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
