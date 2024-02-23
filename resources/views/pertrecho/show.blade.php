@extends('adminlte::page')

@section('template_title')
    {{ $pertrecho->name ?? "{{ __('Show') Pertrecho" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pertrecho</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pertrechos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipoarma:</strong>
                            {{ $pertrecho->tipoArma }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pertrecho->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $pertrecho->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $pertrecho->codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
