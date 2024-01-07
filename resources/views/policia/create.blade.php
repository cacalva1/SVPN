@extends('adminlte::page')

@section('title', 'Personal Policial')

@section('content_header')
    <h1>Personal Policial</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('policias.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('policia.form')

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
@section('css')
    <script>
        console.log('Hi!');
    </script>
@stop
