@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesor</h1>


@stop

@section('content')
<p>Listado de Profesores</p>

<a href="/profesores/registro" class="btn btn-success">Adicionar Profesor</a>
<br><br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @php
            $contador=1
        @endphp
        @foreach ($profesores as $f)
        <tr>
            <th scope="row">
                {{$contador}}
            </th>
            <td>{{$f->codprofesor}}</td>
            <td>{{$f->nomprofesor}}</td>
            <td>{{$f->catprofesor}}</td>
            <td>
                <a href="{{route('eliminaProf', $f->codprofesor)}}" class="btn btn-primary">Editar</a>
                <a href="{{route('eliminaProf', $f->codprofesor)}}" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <tr>
        @php
            $contador = $contador+1
        @endphp
        @endforeach
        
        </tr>
    </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
