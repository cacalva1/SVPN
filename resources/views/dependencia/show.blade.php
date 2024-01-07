@extends('adminlte::page')
@section('title', 'Vehículo')
@section('content_header')
    <h1>Vehículo</h1>
@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Dependencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dependencias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cod Circuito:</strong>
                            {{ $dependencia->cod_circuito }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Distrito:</strong>
                            {{ $dependencia->cod_distrito }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Subcircuito:</strong>
                            {{ $dependencia->cod_subcircuito }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $dependencia->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Circuito:</strong>
                            {{ $dependencia->nombre_circuito }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Distrito:</strong>
                            {{ $dependencia->nombre_distrito }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Subcircuito:</strong>
                            {{ $dependencia->nombre_subcircuito }}
                        </div>
                        <div class="form-group">
                            <strong>Num Circuitos:</strong>
                            {{ $dependencia->num_circuitos }}
                        </div>
                        <div class="form-group">
                            <strong>Num Distritos:</strong>
                            {{ $dependencia->num_distritos }}
                        </div>
                        <div class="form-group">
                            <strong>Num Subcircuitos:</strong>
                            {{ $dependencia->num_subcircuitos }}
                        </div>
                        <div class="form-group">
                            <strong>Parroquia:</strong>
                            {{ $dependencia->parroquia }}
                        </div>
                        <div class="form-group">
                            <strong>Provincia:</strong>
                            {{ $dependencia->provincia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

