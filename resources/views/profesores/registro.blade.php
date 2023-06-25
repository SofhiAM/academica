@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Profesores</h1>


@stop

@section('content')
    <div class="container">
        <!-- <div class="row"> -->
            <form action="{{url('/profesores/registrar')}}" method="post">
                @csrf
                <div class="col-mb-12 col-mb-9">
                    
                    <label class="form-label">Código</label>
                    <input type="text" name="codfacultad" id="codfacultad"  class="form-control"><br>
    
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nomfacultad" id="nomfacultad"  class="form-control"><br>

                    <label class="form-label">Categoria</label>
                    <input type="text" name="catprofesor" id="catprofesor"  class="form-control"><br>
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
