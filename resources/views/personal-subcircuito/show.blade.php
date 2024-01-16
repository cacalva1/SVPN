@extends('layouts.app')

@section('template_title')
    {{ $personalSubcircuito->name ?? "{{ __('Show') Personal Subcircuito" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Personal Subcircuito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personal-subcircuitos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Asignacion:</strong>
                            {{ $personalSubcircuito->fecha_asignacion }}
                        </div>
                        <div class="form-group">
                            <strong>Policia Id:</strong>
                            {{ $personalSubcircuito->policia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Subcircuito Id:</strong>
                            {{ $personalSubcircuito->subcircuito_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
