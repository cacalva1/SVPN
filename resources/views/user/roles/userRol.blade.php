@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1">Usuarios y Roles</h1>
    @stop

    @section('content')
        <div class="card">
            <div class="card-header">
                <p>{{ $user->name }}</p>
            </div>
            <div class="card-body">
                <h5>Usuarios y Roles</h5>
                {!! Form::model($user, ['route' => ['asignar.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, [
                                'class' => 'mr-1',
                            ]) !!}
                            {{ $role->name }}

                        </label>
                    </div>
                @endforeach
                {!! Form::submit('Asignar Roles', ['class' => 'btn btn-primary mt-3']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    @stop
    @section('css')
    @stop
    @section('js')
        <script>
            console.log('Hi')
        </script>
    @stop
