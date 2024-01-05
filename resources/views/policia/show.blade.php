@extends('layouts.app')

@section('template_title')
    {{ $policia->name ?? "{{ __('Show') Policia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Policia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('policias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $policia->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $policia->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $policia->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $policia->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Sangre:</strong>
                            {{ $policia->tipo_sangre }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad Nacimiento:</strong>
                            {{ $policia->ciudad_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $policia->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Rango:</strong>
                            {{ $policia->rango }}
                        </div>
                        <div class="form-group">
                            <strong>Id Dependencia:</strong>
                            {{ $policia->id_dependencia }}
                        </div>
                        <div class="form-group">
                            <strong>Rol:</strong>
                            {{ $policia->rol }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $policia->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
