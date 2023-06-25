@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
<p>Listado de Estudiantes</p>

<a href="/estudiantes/registro" class="btn btn-success">Adicionar Estudiante</a>
<br><br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Sexo</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Barrio</th>
            <th scope="col">Programa</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @php
            $contador=1
        @endphp
        @foreach ($estudiantes as $f)
        <tr>
            <th scope="row">
                {{$contador}}
            </th>
            <td>{{$f->codestudiante}}</td>
            <td>{{$f->nomestudiante}}</td>
            <td>{{$f->edaestudiante}}</td>
            <td>{{$f->fechestudiante}}</td>
            <td>{{$f->sexestudiante}}</td>
            <td>{{$f->ciudad}}</td>
            <td>{{$f->barrio}}</td>
            <td>{{$f->programa}}</td>
            <td>
                <a href="{{route('eliminaEst', $f->codestudiante)}}" class="btn btn-primary">Editar</a>
                <a href="{{route('eliminaEst', $f->codestudiante)}}" class="btn btn-danger">Eliminar</a>
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
