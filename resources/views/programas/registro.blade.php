@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>


@stop

@section('content')
    <p>Registro de Programas</p>
    <div class="container">
        <!-- <div class="row"> -->
            <form action="{{url('/programas/registrar')}}" method="post">
                @csrf
                <div class="col-mb-12 col-mb-9">
                    
                    <label class="form-label">Código</label>
                    <input type="text" name="codprograma" id="codprograma"  class="form-control"><br>
    
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nomprograma" id="nomprograma"  class="form-control"><br>

                    <div class="input-group mb-6">
                        <label class="input-group-text" for="inputGroupSelect01">Facultad</label>
                        <select class="form-select" id="codfacultad" name="codfacultad">
                            <option selected>Seleccione una facultad</option>
                            @foreach($facultades as $f)
                            <option value={{$f->codFacultad}}>{{$f -> nomFacultad}}</option>
                            @endforeach
                        </select>
                    </div><br>
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
