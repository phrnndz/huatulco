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
                    <a href="{{  route('calendario.create')  }}" ><span class="fui-plus"></span>  Agregar evento</a>﻿
                    <br>
                    <br>
                      <table class="table table-bordered table-striped"> 
                            <thead>
                                <th>Nombre evento</th>
                                <th>Fechass</th>
                                <th>Estatus</th>

                                <th>Acciones</th>

                            </thead> 
                            <tbody> 
                                @foreach ($eventos as $evento)
                                <tr> 
                                    <td>{{ $evento->nombreEvento }}</td>
                                    <td>{{ $evento->fechaEvento }}</td> 

                                    <td>
                                        @if($evento->estatus == '1')
                                            <span class="label label-info">Publicado</span
                                        @else
                                            <span class="label label-default">Borrador</span>
                                        @endif
                                    </td> 
                                   
                                    <td>
                                        

                                        {!! Form::open(array('route'=> ['calendario.destroy', $evento->id],'method' =>'DELETE')) !!}
                                        {{csrf_field()}}
                                        <a href="{{  route('calendario.show', $evento->id, 'Ver')  }}" ><span class="fui-eye"></span ></a>﻿
                                        <a href="{{  route('calendario.edit', $evento->id, 'Editar')  }}" > <span class="fui-new"></span> </a>﻿
                                        {{ Form::submit('Eliminar',array('class' => 'btn btn-danger'))}}
                                        {!! Form::close() !!}

                                        {!! Form::open(array('route'=> ['calendario.cambiaEstatus', $evento->id],'method' =>'GET')) !!}
                                            {{ Form::submit('Cambiar Estatus',array('class' => 'btn btn-primary'))}}
                                         {!! Form::close() !!}


                                    </td>
                                </tr>
                                @endforeach
                            </tbody> 
                        </table>

                        <div class="text-center">
                            {!! $eventos->links()!!}
                        </div>

                                         

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
