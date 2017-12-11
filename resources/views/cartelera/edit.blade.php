@extends('layouts.app')

@section('title','| Editar película')

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

                       
                   <h2>Agregar película</h2> 

                         {!! Form::model($pelicula,array('route' => array('cartelera.update', $pelicula->id),'files' => true, 'method' => 'PUT')) !!}
                        <div class="form-group">
                            {{ Form::label('nombre', 'Nombre', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('nombre',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('clasificacion', 'Clasificacion', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('clasificacion',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('duracion', 'Duracion', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('duracion',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('trailerURL', 'trailerURL', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('trailerURL',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('idioma', 'Idiomas', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('idioma','Español, Inglés',array('class'=>'form-control', 'class' => 'tagsinput', 'data-role'=>'tagsinput')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('horario', 'Horarios', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('horario','21:00',array('class'=>'form-control', 'class' => 'tagsinput', 'data-role'=>'tagsinput')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('sinopsis', 'Sinopsis', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::textarea('sinopsis',null,array('class'=>'form-control', 'required' => '')) }}
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
