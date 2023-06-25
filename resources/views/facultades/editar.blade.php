@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Facultad</h1>


@stop

@section('content')
    <p>Editar Facultad</p>
    <div class="container">
        <!-- <div class="row"> -->
            <form action="{{url('/facultades/editar',  sprintf('%02d', $facultad->codFacultad))}}" method="post">
                @csrf
                <div class="col-mb-12 col-mb-9">                    
                    <label class="form-label">Código</label>
                    <input type="text" name="codfacultad" id="codfacultad" class="form-control" value='{{$facultad->codFacultad}}' disabled><br>
    
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nomfacultad" id="nomfacultad" value = '{{$facultad->nomFacultad}}' class="form-control"><br>
                </div>
                <br><button type="submit" class="btn btn-primary">Registrar cambios</button>
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
