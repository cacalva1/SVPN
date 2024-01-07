@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Lista de vehículos</h1>
    <div class="float-right">
        <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
            {{ __('Nuevo') }}
        </a>
    </div>
@stop
@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tipo</th>
                <th>Placa</th>
                <th>Chasis</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Motor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ ++$i }}</td>

                    <td>{{ $vehiculo->tipo_vehiculo }}</td>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->chasis }}</td>
                    <td>{{ $vehiculo->marca }}</td>
                    <td>{{ $vehiculo->modelo }}</td>
                    <td>{{ $vehiculo->motor }}</td>

                    <td>
                        <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('vehiculos.show', $vehiculo->id) }}"><i
                                    class="fa fa-fw fa-eye"></i> {{ __('   Ver') }}</a>
                            <a class="btn btn-sm btn-success" href="{{ route('vehiculos.edit', $vehiculo->id) }}"><i
                                    class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                                {{ __('Eliminar') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#example').DataTable({
            responsive: true
        });
    </script>
@stop
