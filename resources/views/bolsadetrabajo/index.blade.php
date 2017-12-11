@extends('layouts.app')

@section('title','| Ver película')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{  route('bolsadetrabajo.create')  }}" ><span class="fui-plus"></span>  Agregar Empleo</a>﻿
                    <br>
                    <br>
                      <table class="table table-bordered table-striped"> 
                            <thead>
                                <th>Nombre</th>
                                <th>Estatus</th>

                                <th>Acciones</th>

                            </thead> 
                            <tbody> 
                                @foreach ($empleos as $empleo)
                                <tr> 
                                    <td>{{ $empleo->nombre }}</td> 
                                    <td>
                                        @if($pelicula->estatus == '1')
                                            <span class="label label-info">Publicado</span
                                        @else
                                            <span class="label label-default">Borrador</span>
                                        @endif
                                    </td> 
                                   
                                    <td>
                                        

                                        {!! Form::open(array('route'=> ['bolsadetrabajo.destroy', $empleo->id],'method' =>'DELETE')) !!}
                                        {{csrf_field()}}
                                        <a href="{{  route('bolsadetrabajo.show', $empleo->id, 'Ver')  }}" ><span class="fui-eye"></span ></a>﻿
                                        <a href="{{  route('bolsadetrabajo.edit', $empleo->id, 'Editar')  }}" > <span class="fui-new"></span> </a>﻿
                                        {{ Form::submit('Eliminar',array('class' => 'btn btn-danger'))}}
                                        {!! Form::close() !!}

                                        {!! Form::open(array('route'=> ['bolsadetrabajo.cambiaEstatus', $empleo->id],'method' =>'GET')) !!}
                                            {{ Form::submit('Cambiar Estatus',array('class' => 'btn btn-primary'))}}
                                         {!! Form::close() !!}


                                    </td>
                                </tr>
                                @endforeach
                            </tbody> 
                        </table>

                        <div class="text-center">
                            {!! $empleos->links()!!}
                        </div>

                                         

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
