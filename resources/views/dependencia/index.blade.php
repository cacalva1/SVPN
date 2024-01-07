@extends('adminlte::page')
@section('title', 'Lista dependencias')
@section('content_header')
    <h1>Lista de dependencias</h1>
    <div class="float-right">
        <a href="{{ route('dependencias.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
            {{ __('Nuevo') }}
        </a>
    </div>
@stop
@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Provincia</th>
                <th>Num Distritos</th>
                <th>Parroquia</th>
                <th>Cod Distrito</th>
                <th>Nombre Distrito</th>
                <th>Num Circuitos</th>
                <th>Cod Circuito</th>
                <th>Nombre Circuito</th>
                <th>Num Subcircuitos</th>
                <th>Cod Subcircuito</th>
                <th>Nombre Subcircuito</th>
                <th>Estado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dependencias as $dependencia)
                <tr>
                    <td>{{ $dependencia->provincia }}</td>
                    <td>{{ $dependencia->num_distritos }}</td>
                    <td>{{ $dependencia->parroquia }}</td>
                    <td>{{ $dependencia->cod_distrito }}</td>
                    <td>{{ $dependencia->nombre_distrito }}</td>
                    <td>{{ $dependencia->num_circuitos }}</td>
                    <td>{{ $dependencia->cod_circuito }}</td>
                    <td>{{ $dependencia->nombre_circuito }}</td>
                    <td>{{ $dependencia->num_subcircuitos }}</td>
                    <td>{{ $dependencia->cod_subcircuito }}</td>
                    <td>{{ $dependencia->nombre_subcircuito }}</td>
                    <td>{{ $dependencia->estado }}</td>
                    <td>
                        <form action="{{ route('dependencias.destroy', $dependencia->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('dependencias.show', $dependencia->id) }}"><i
                                    class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                            <a class="btn btn-sm btn-success" href="{{ route('dependencias.edit', $dependencia->id) }}"><i
                                    class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                                {{ __('Delete') }}</button>
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
