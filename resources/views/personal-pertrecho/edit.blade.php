@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Personal Pertrecho
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Personal Pertrecho</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('personal-pertrechos.update', $personalPertrecho->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('personal-pertrecho.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
