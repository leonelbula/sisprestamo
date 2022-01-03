@extends('adminlte::page')

@section('title', 'clientes')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop


@section('content_header')
    <h1>Clientes</h1>
    <a href="{{ route('cliente.create') }}" class="btn btn-primary">
       Nuevo Cliente
    </a>
    <button type="button" class="btn btn-primary">Success</button>
@stop

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Listado de clientes</h3>
    </div>
    <div class="card-body">
        @if (session('info'))
        <div class="alert alert-success" role="alert">
            {{ session('info') }}
          </div>
        @endif
    <table id="listaCliente" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nombre </th>
                <th>Identificacion</th>
                <th>Direccion</th>
                <th>Ciudad</th>
                <th>Departamento</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->fullname }}</td>
                <td>{{ $cliente->identification }}</td>
                <td>{{ $cliente->direction }}</td>
                <td>{{ $cliente->town }}</td>
                <td>{{ $cliente->department }}</td>
                <td>{{ $cliente->phone }}</td>
                <td>{{ $cliente->email }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('cliente.edit',$cliente)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('cliente.destroy',$cliente) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                        </form>
                    </div>
                </td>
            </tr>

            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>Nombre </th>
                <th>Identificacion</th>
                <th>Direccion</th>
                <th>Ciudad</th>
                <th>Departamento</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Accion</th>
            </tr>
        </tfoot>
    </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Listado de clientes
    </div>
    <!-- /.card-footer-->
  </div>
@stop


@section('js')
 <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
 <script>
     $(document).ready(function() {
    $('#listaCliente').DataTable();
} );
 </script>
@stop
