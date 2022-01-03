@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Informacion del Cliente</h1>
    <a href="{{ route('cliente.index') }}" class="btn btn-primary">
        Inicio
    </a>
    <a href="{{ route('cliente.index') }}" class="btn btn-primary">
        General Prestamo
    </a>
    <a href="{{ route('cliente.edit',$cliente)}}" class="btn btn-warning ">
        <i class="fas fa-edit">Editar</i>
    </a>
@stop

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Informacion del clientes</h3>
    </div>
    <div class="card-body">
        @if (session('info'))
        <div class="alert alert-success" role="alert">
            {{ session('info') }}
          </div>
        @endif
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Nombre</strong> {{ $cliente->fullname }}</li>
            <li class="list-group-item"><strong>Identificacion:</strong>  {{ $cliente->identification }}</li>
            <li class="list-group-item"><strong>Direccion:</strong> {{ $cliente->direction }}</li>
            <li class="list-group-item"><strong>Direccion:</strong> {{ $cliente->town }}</li>
            <li class="list-group-item"><strong>Direccion:</strong> {{ $cliente->department }}</li>
            <li class="list-group-item"><strong>Direccion:</strong> {{ $cliente->phone }}</li>
            <li class="list-group-item"><strong>Direccion:</strong> {{ $cliente->email }}</li>

          </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Informacion del clientes
    </div>
    <!-- /.card-footer-->
  </div>

@stop


