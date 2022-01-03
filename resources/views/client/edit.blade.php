@extends('adminlte::page')

@section('title', 'clientes')

@section('content_header')
    <h1>Clientes</h1>
    <a href="{{ route('cliente.index') }}" class="btn btn-primary">
        Cancelar
    </a>
@stop

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Nuevo clientes</h3>
    </div>
    <div class="card-body">

        {!! Form::model($cliente,['route'=>['cliente.update',$cliente],'method'=>'put']) !!}
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    {!! Form::label('name', 'Nombre Completo') !!}
                    {!! Form::text('fullname', null, ['class'=>'form-control','placeholder'=>'Ingrese el Nombre completo']) !!}
                    @error('fullname')
                    <small class="form-text text-danger">
                        *{{ $message}}
                    </small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    {!! Form::label('name', 'Identificacion') !!}
                    {!! Form::number('identification', null, ['class'=>'form-control','placeholder'=>'Ingrese el numero de identificacion ']) !!}
                    @error('identification')
                    <small class="form-text text-danger">
                        *{{ $message}}
                    </small>
                    @enderror
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    {!! Form::label('name', 'Direccion') !!}
                    {!! Form::text('direction', null, ['class'=>'form-control','placeholder'=>'Ingrese la direccion del cliente']) !!}
                    @error('direction')
                    <small class="form-text text-danger">
                        *{{ $message}}
                    </small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    {!! Form::label('name', 'Ciudad') !!}
                    {!! Form::text('town', null, ['class'=>'form-control','placeholder'=>'Ingrese la Ciudad ']) !!}
                    @error('town')
                    <small class="form-text text-danger">
                        *{{ $message}}
                    </small>
                    @enderror
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    {!! Form::label('name', 'Departamento') !!}
                    {!! Form::text('department', null, ['class'=>'form-control','placeholder'=>'Ingrese el Departamento']) !!}
                    @error('department')
                    <small class="form-text text-danger">
                        *{{ $message}}
                    </small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    {!! Form::label('name', 'Telefono') !!}
                    {!! Form::number('phone', null, ['class'=>'form-control','placeholder'=>'Ingrese el numero de telefono ']) !!}
                    @error('phone')
                    <small class="form-text text-danger">
                        *{{ $message}}
                    </small>
                    @enderror
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    {!! Form::label('name', 'Email') !!}
                    {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Ingrese el correo electronico']) !!}
                    @error('email')
                    <small class="form-text text-danger">
                        *{{ $message}}
                    </small>
                    @enderror
                </div>
            </div>
        </div>
        {!! Form::submit('Editar', ['class'=>'btn btn-success']) !!}
        {!! Form::close() !!}

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Nuevo clientes
    </div>
    <!-- /.card-footer-->
  </div>
@stop


