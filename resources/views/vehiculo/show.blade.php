@extends('layouts.app')

@section('template_title')
    {{ $vehiculo->name ?? "{{ __('Show') Vehiculo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Vehiculo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vehiculos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Vehiculo:</strong>
                            {{ $vehiculo->tipo_vehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $vehiculo->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Chasis:</strong>
                            {{ $vehiculo->chasis }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $vehiculo->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $vehiculo->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Motor:</strong>
                            {{ $vehiculo->motor }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje:</strong>
                            {{ $vehiculo->kilometraje }}
                        </div>
                        <div class="form-group">
                            <strong>Cilindraje:</strong>
                            {{ $vehiculo->cilindraje }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad Carga:</strong>
                            {{ $vehiculo->capacidad_carga }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad Pasajeros:</strong>
                            {{ $vehiculo->capacidad_pasajeros }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $vehiculo->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
