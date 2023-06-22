@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Facultades</h1>


@stop

@section('content')
    <!-- <div class="container"> -->
    <form action="{{url('/facultades/registrar')}}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Código</label>
                <input type="text" name="codfacultad" id="codfacultad"  class="form-control"><br>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nomfacultad" id="nomfacultad"  class="form-control"><br>
            </div>
            <br><button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    <!-- </div> -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
