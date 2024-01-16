@extends('adminlte::page')
@section('title', 'Vehículo-subcircuito')
@section('content_header')
    <h1>Vehículos</h1>
@stop
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h3>Subcircuito - Flota Vehícular</h3>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Placa</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Kilometraje</th>
                                <th>Asignado a</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($VehiculoDependencia as $vehiculo)
                                @if ($vehiculo->estado == 'Activo')
                                    <tr>
                                        <td>{{ $vehiculo->tipo_vehiculo }}</td>
                                        <td>{{ $vehiculo->placa }}</td>
                                        <td>{{ $vehiculo->marca }}</td>
                                        <td>{{ $vehiculo->modelo }}</td>
                                        <td>{{ $vehiculo->kilometraje }}</td>
                                        <td>
                                            @if ($vehiculo->dependencia_id)
                                                @if ($vehiculo->estado == 'Activo')
                                                    {{ $vehiculo->nombre_subcircuito }}
                                                @else
                                                    No asignado
                                                @endif
                                            @else
                                                No asignado
                                            @endif
                                        </td>

                                        <td>
                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#AsignarVehiculo{{ $vehiculo->id }}"><i
                                                    class="fa fa-pencil">Asignar</i></button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    @foreach ($vehiculos as $vehiculo)
        <div class="modal fade" id="AsignarVehiculo{{ $vehiculo->id }}" tabindex="-1" role="dialog"
            aria-labelledby="AsignarVehiculo{{ $vehiculo->id }}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h3 class="modal-title" id="AsignarVehiculo{{ $vehiculo->id }}Label">Asignar Vehículo a Dependencia
                        </h3>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('VehiculoSubcircuito.update', $vehiculo->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="tipo_vehiculo">Tipo de Vehículo:</label>
                                        <input type="text" class="form-control" id="tipo_vehiculo" name="tipo_vehiculo"
                                            value="{{ $vehiculo->tipo_vehiculo }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="placa">Placa:</label>
                                        <input type="text" class="form-control" id="placa" name="placa"
                                            value="{{ $vehiculo->placa }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="marca">Marca:</label>
                                        <input type="text" class="form-control" id="marca" name="marca"
                                            value="{{ $vehiculo->marca }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="modelo">Modelo:</label>
                                        <input type="text" class="form-control" id="modelo" name="modelo"
                                            value="{{ $vehiculo->modelo }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="kilometraje">Kilometraje:</label>
                                        <input type="text" class="form-control" id="kilometraje" name="kilometraje"
                                            value="{{ $vehiculo->kilometraje }}" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="dependencia">Dependencia:</label>
                                        <select class="form-control" id="dependencia" name="dependencia">
                                            <option value="">Seleccionar dependencia</option>
                                            @foreach ($dependencias as $dependencia)
                                                @if ($dependencia->estado == 'Activo')
                                                    <option value="{{ $dependencia->id }}"
                                                        {{ $vehiculo->dependencia_id == $dependencia->id ? 'selected' : '' }}>
                                                        {{ $dependencia->nombre_subcircuito }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
