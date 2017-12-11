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
                       <h3>Agregar oferta laboral</h3> 
                       <br>
                        {!! Form::open(array('route'=> 'bolsadetrabajo.store','class' =>'form-horizontal','data-parsley-validate'=>'','files' => true)) !!}
                        <div class="form-group">
                            {{ Form::label('nombreOferta', 'Nombre Oferta', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('nombreOferta',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('nombreEmpresa', 'Nombre Empresa', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('nombreEmpresa',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('personaContacto', 'Nombre Contacto', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('personaContacto',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('telefonoContacto', 'Telefono Contacto', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('telefonoContacto',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('correoContacto', 'Correo Contacto', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('correoContacto',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            {{ Form::label('salario', 'Salario Ofrecido', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('salario',null,array('class'=>'form-control', 'required' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('idiomas', 'Idiomas requeridos', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('idiomas','Español, Inglés',array('class'=>'form-control', 'class' => 'tagsinput', 'data-role'=>'tagsinput')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('tipoContrato', 'Tipo de Contrato', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('tipoContrato',null,array('class'=>'form-control', 'class' => 'tagsinput', 'data-role'=>'tagsinput')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('ubicacion', 'Ubicacion de trabajo', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('ubicacion',null,array('class'=>'form-control', 'class' => 'tagsinput', 'data-role'=>'tagsinput'))  }}
                            </div>
                        </div>
                         <div class="form-group">
                            {{ Form::label('horario', 'Horario de trabajo', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('horario',null,array('class'=>'form-control', 'class' => 'tagsinput', 'data-role'=>'tagsinput'))  }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('nivelEstudios', 'Nivel de estudios requerido', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::text('nivelEstudios',null,array('class'=>'form-control', 'class' => 'tagsinput', 'data-role'=>'tagsinput'))  }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('numeroPlazas', 'Número de plazas requerido', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::number('numeroPlazas',null,array('class'=>'form-control', 'class' => 'tagsinput', 'data-role'=>'tagsinput'))  }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('diasLaborales', 'Días a laborar', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::number('diasLaborales',null,array('class'=>'form-control', 'class' => 'tagsinput', 'data-role'=>'tagsinput'))  }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('descripcion', 'Detalla la oferta laboral', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-10">
                            {{ Form::textarea('ubicacion',null,array('class'=>'form-control', 'required' => '')) }}
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
