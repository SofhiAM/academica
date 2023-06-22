@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Facultades</h1>


@stop

@section('content')
<p>Listado de Facultades</p>

<a href="/facultades/registro" class="btn btn-success">Adicionar facultades</a>
<br><br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @php
            $contador=1
        @endphp
        @foreach ($facultades as $f)
        <tr>
            <th scope="row">
                {{$contador}}
            </th>
            <td>{{$f->codFacultad}}</td>
            <td>{{$f->nomFacultad}}</td>
        <td>
            <a href="{{route('eliminaFac', $f->codFacultad)}}" class="btn btn-primary">Editar</a>
            <a href="{{route('eliminaFac', $f->codFacultad)}}" class="btn btn-danger">Eliminar</a>
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
