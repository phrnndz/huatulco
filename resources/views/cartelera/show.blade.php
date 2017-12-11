@extends('layouts.app')

@section('title','| Ver película')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                       
                    <table class="table table-bordered table-striped"> 
                        <colgroup> 
                            <col class="col-xs-1">
                                <col class="col-xs-7"> 
                            </colgroup> 
                            <tbody> 
                                <tr> 
                                    <th scope="row"> Nombre </th>
                                    <td>{{ $pelicula->nombre }}</td> 
                                </tr> 
                                <tr> 
                                    <th scope="row"> Sinopsis </th>
                                    <td>{{ $pelicula->sinopsis }}</td> 
                                </tr> 
                                 <tr> 
                                    <th scope="row"> Clasificacion </th>
                                    <td>{{ $pelicula->clasificacion }}</td> 
                                </tr> 
                                <tr> 
                                    <th scope="row"> Duración </th>
                                    <td>{{ $pelicula->duracion }}</td> 
                                </tr>
                                <tr> 
                                    <th scope="row"> Idioma </th>
                                    <td>{{ $pelicula->idioma }}</td> 
                                </tr>
                                 <tr> 
                                    <th scope="row"> Horarios </th>
                                    <td>{{ $pelicula->horario }}</td> 
                                </tr>
                                <tr> 
                                    <th scope="row"> Imagen </th>
                                    <td>
                                        <img src="{{ asset('images/'.$pelicula->imagenURL) }}" alt="">
                                    </td> 
                                </tr>
                                <tr> 
                                    <th scope="row"> Trailer </th>
                                    <td>
                                        {{ $pelicula->trailerURL }}
                                    </td>
                                </tr> 
                            </tbody> 
                        </table>
                                         

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
