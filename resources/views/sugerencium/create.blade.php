@extends('layouts.app')
@section('template_title')
    {{ __('Sugerencias y') }} Reclamos
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Sugerencias y') }} Reclamos</span>

                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('sugerencia.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('sugerencium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        console.log('Hi!');
    </script>
    
@stop
@if (session('mensaje'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Vehículo actualizado!',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif
