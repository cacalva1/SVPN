@extends('adminlte::page')

@section('title', 'Vehículos')

@section('content_header')
    <h1>Vehículos</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Vehiculo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vehiculos.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('vehiculo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
