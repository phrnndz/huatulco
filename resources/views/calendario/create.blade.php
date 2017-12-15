@extends('layouts.app')

@section('title','| Crear película')

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
                       <h3>Agregar evento</h3> 
                       <br>
                        {!! Form::open(array('route'=> 'cartelera.store','class' =>'form-horizontal','data-parsley-validate'=>'','files' => true)) !!}
                        <div class="form-group">
                            {{ Form::label('nombreEvento', 'Nombre evento', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('nombreEvento',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('descripcionEvento', 'Descripcion', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('descripcionEvento',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('fechaEvento', 'Fecha', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('fechaEvento',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('horaEvento', 'Hora', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('horaEvento',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('ubicacionEvento', '¿Dónde?', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('ubicacionEvento',null,array('class'=>'form-control')) }}
                            </div>
                        </div>
                         <div class="form-group">
                            {{ Form::label('imagenURL', 'Thumbnail', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::file('imagenURL') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-10">
                                 {{ Form::submit('Guardar',array('class' => 'btn btn-primary'))}}
                                </a>
                            </div>
                        </div>
                       
                        {!! Form::close() !!}
                                         

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
