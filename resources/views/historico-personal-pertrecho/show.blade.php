@extends('layouts.app')

@section('template_title')
    {{ $historicoPersonalPertrecho->name ?? "{{ __('Show') Historico Personal Pertrecho" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historico Personal Pertrecho</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('historico-personal-pertrechos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Accion:</strong>
                            {{ $historicoPersonalPertrecho->fecha_accion }}
                        </div>
                        <div class="form-group">
                            <strong>Policia Id:</strong>
                            {{ $historicoPersonalPertrecho->policia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pertrecho Id:</strong>
                            {{ $historicoPersonalPertrecho->pertrecho_id }}
                        </div>
                        <div class="form-group">
                            <strong>Accion:</strong>
                            {{ $historicoPersonalPertrecho->accion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
