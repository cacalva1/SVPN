@extends('layouts.app')

@section('template_title')
    {{ $solicitudMantenimiento->name ?? "{{ __('Show') Solicitud Mantenimiento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Solicitud Mantenimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitud-mantenimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Solicitud:</strong>
                            {{ $solicitudMantenimiento->fecha_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Solicitud:</strong>
                            {{ $solicitudMantenimiento->hora_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje Actual:</strong>
                            {{ $solicitudMantenimiento->Kilometraje_actual }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $solicitudMantenimiento->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Policia Id:</strong>
                            {{ $solicitudMantenimiento->policia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Id:</strong>
                            {{ $solicitudMantenimiento->vehiculo_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
