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
                                    <th scope="row"> Nombre Oferta </th>
                                    <td>{{ $empleo->nombreOferta }}</td> 
                                </tr> 
                                <tr> 
                                    <th scope="row"> Empresa </th>
                                    <td>{{ $empleo->nombreEmpresa }}</td> 
                                </tr> 
                                <tr> 
                                    <th scope="row"> Contacto </th>
                                    <td>{{ $empleo->nombreContacto }}</td> 
                                </tr> 
                                 <tr> 
                                    <th scope="row"> Telefono </th>
                                    <td>{{ $empleo->telefonoContacto }}</td> 
                                </tr> 
                                <tr> 
                                    <th scope="row"> Correo Electrónico </th>
                                    <td>{{ $empleo->correoContacto   }}</td> 
                                </tr>
                                <tr> 
                                    <th scope="row"> Salario ofrecido </th>
                                    <td>{{ $empleo->salario }}</td> 
                                </tr>
                                 <tr> 
                                    <th scope="row"> Tipo Contrato    </th>
                                    <td>{{ $empleo->tipoContrato     }}</td> 
                                </tr>
                            </tbody> 
                        </table>
                                         

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
