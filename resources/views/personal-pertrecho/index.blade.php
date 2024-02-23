@extends('adminlte::page')
@section('title', 'Personal-Pertrecho')
@section('content_header')
<h1>Personal Policial</h1>

@stop
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h3>Pertrecho - Personal policial</h3>
    </section>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Rango</th>
                            <th>Arma Asignada</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personalPertrechos as $policia)
                        @if ($policia->estado == 'Activo')
                        <tr>
                            <td>{{ $policia->cedula}}</td>
                            <td>{{ $policia->nombres }}</td>
                            <td>{{ $policia->apellidos }}</td>
                            <td>{{ $policia->rango }}</td>
                            <td>
                                @if ($policia->pertrecho_id)
                                @if ($policia->estado == 'Activo')
                                {{ $policia->Nombre .'-'.$policia->descripcion.': '.$policia ->codigo }}
                                @else
                                No asignado
                                @endif
                                @else
                                No asignado
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-success" data-toggle="modal" data-target="#EditarAsignacion{{ $policia->id2 }}"><i class="fa fa-pencil">Asignar</i></button>
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
@foreach ($policias as $policia)

<div class="modal fade" id="EditarAsignacion{{ $policia->id }}" tabindex="-1" role="dialog" aria-labelledby="EditarAsignacion{{ $policia->id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title" id="EditarAsignacion{{ $policia->id }}Label">Asignar Arma
                </h3>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('PersonalPertrechos.update', $policia->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="cedula">Cédula:</label>
                                <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $policia->cedula }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="name">Nombres:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $policia->nombres }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="correo">Apellidos:</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $policia->apellidos }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="rango">Rango:</label>
                                <input type="text" class="form-control" id="rango" name="rango" value="{{ $policia->rango }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="pertrecho">Pertrecho:</label>
                                <select class="form-control" id="pertrecho" name="pertrecho">
                                    <option value="">Seleccionar Arma</option>
                                    @foreach ($pertrechos as $pertrecho)
                                    <option value="{{ $pertrecho->id }}" >
                                        {{ $pertrecho->Nombre .'-'.$pertrecho->descripcion.': '.$pertrecho ->codigo}}
                                    </option>
                                    
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