@extends('adminlte::page')
@extends('estilos.table_responsive')
@section('title', 'Gestión personal policial')
@section('content_header')
<h1>Gestión Personal Policial</h1>
@stop
@section('content')
<div class="card">
    <div class="float-right">
        <a href="{{ route('policias.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
            {{ __('Nuevo') }}
        </a>
    </div>
    <div class="card-body">
        @php
        $heads = ['No', 'Cedula','Nombres','Apellidos','Fecha Nacimiento','Tipo Sangre','Ciudad Nacimiento','Celular','Rango','Dependencia','Rol','Estado', ['label' => 'Actions', 'no-export' => true, 'width' => 15]];

        $btnEdit = '';
        $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
            <i class="fa fa-lg fa-fw fa-trash"></i>
        </button>';
        $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
            <i class="fa fa-lg fa-fw fa-eye"></i>
        </button>';

        $config = [
            'responsive' => true,
        'language' => ['url' => 'http://localhost/SVPN/public/dist/js/es-Es.json'],
        ];
        @endphp

        <x-adminlte-datatable id="table1" :heads="$heads" :config="$config" class="table table-striped table-bordered">
            @foreach ($policias as $policia)
            <tr>
                <td>{{ $policia->id }}</td>
                <td>{{ $policia->cedula }}</td>
                <td>{{ $policia->nombres }}</td>
                <td>{{ $policia->apellidos }}</td>
                <td>{{ $policia->fecha_nacimiento }}</td>
                <td>{{ $policia->tipo_sangre }}</td>
                <td>{{ $policia->ciudad_nacimiento }}</td>
                <td>{{ $policia->celular }}</td>
                <td>{{ $policia->rango }}</td>
                <td>{{ $policia->id_dependencia }}</td>
                <td>{{ $policia->rol }}</td>
                <td>{{ $policia->estado }}</td>
                <td>
                    <form action="{{ route('policias.destroy', $policia->id) }}" method="POST">
                        <a class="btn btn-sm btn-primary " href="{{ route('policias.show', $policia->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                        <a class="btn btn-sm btn-success" href="{{ route('policias.edit', $policia->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                          </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>
@stop

