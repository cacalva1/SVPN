@extends('layouts.app')

@section('template_title')
    {{ $ordenCombustible->name ?? "{{ __('Show') Orden Combustible" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Orden Combustible</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('orden-combustibles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantgalonesgasolina:</strong>
                            {{ $ordenCombustible->cantGalonesGasolina }}
                        </div>
                        <div class="form-group">
                            <strong>Id Policia:</strong>
                            {{ $ordenCombustible->id_policia }}
                        </div>
                        <div class="form-group">
                            <strong>Id Vehiculo:</strong>
                            {{ $ordenCombustible->id_vehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje Actual:</strong>
                            {{ $ordenCombustible->kilometraje_actual }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Gasolinera:</strong>
                            {{ $ordenCombustible->nombre_gasolinera }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
