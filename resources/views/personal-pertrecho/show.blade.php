@extends('layouts.app')

@section('template_title')
    {{ $personalPertrecho->name ?? "{{ __('Show') Personal Pertrecho" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Personal Pertrecho</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personal-pertrechos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Asignacion:</strong>
                            {{ $personalPertrecho->fecha_asignacion }}
                        </div>
                        <div class="form-group">
                            <strong>Policia Id:</strong>
                            {{ $personalPertrecho->policia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pertrecho Id:</strong>
                            {{ $personalPertrecho->pertrecho_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
