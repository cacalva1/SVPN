@extends('layouts.app')

@section('template_title')
    {{ $dependencia->name ?? "{{ __('Show') Dependencia" }}
@endsection

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
                            <strong>Dependencia:</strong>
                            {{ $dependencia->dependencia }}
                        </div>
                        <div class="form-group">
                            <strong>Idprovincia:</strong>
                            {{ $dependencia->idProvincia }}
                        </div>
                        <div class="form-group">
                            <strong>Idparroquia:</strong>
                            {{ $dependencia->idParroquia }}
                        </div>
                        <div class="form-group">
                            <strong>Iddistrito:</strong>
                            {{ $dependencia->idDistrito }}
                        </div>
                        <div class="form-group">
                            <strong>Idcircuito:</strong>
                            {{ $dependencia->idCircuito }}
                        </div>
                        <div class="form-group">
                            <strong>Idsubcircuito:</strong>
                            {{ $dependencia->idSubcircuito }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
