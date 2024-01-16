@extends('layouts.app')

@section('template_title')
    {{ $vehiculoSubcircuito->name ?? "{{ __('Show') Vehiculo Subcircuito" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Vehiculo Subcircuito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vehiculo-subcircuitos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Asignacion:</strong>
                            {{ $vehiculoSubcircuito->fecha_asignacion }}
                        </div>
                        <div class="form-group">
                            <strong>Policia Id:</strong>
                            {{ $vehiculoSubcircuito->policia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Dependencia Id:</strong>
                            {{ $vehiculoSubcircuito->dependencia_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
