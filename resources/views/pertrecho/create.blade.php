@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Pertrecho
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Pertrecho</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pertrechos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pertrecho.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
