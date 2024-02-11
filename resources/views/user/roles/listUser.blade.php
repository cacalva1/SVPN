@extends('adminlte::page')
@section('title', 'Roles')
@section('content_header')
    <h1>Administración de Usuarios</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <x-adminlte-button label="Nuevo" theme="primary" icon="fas fa-key" class="float-right" data-toggle="modal"
                data-target="#modalPurple" />
        </div>
        <div class= "card-body">
            @php
                $heads = ['ID', 'Name', ['label' => 'Actions', 'no-export' => true, 'width' => 15]];

                $btnEdit = '';
                $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
                $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';

                $config = [
                    'language' => ['url' => 'http://localhost/SVPN/public/dist/js/es-Es.json'],
                ];
            @endphp

            <x-adminlte-datatable id="table1" :heads="$heads" :config="$config" class="table table-striped table-bordered">
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td><a href= "{{ route('asignar.edit', $user) }}"
                                class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                            <form style="display: inline" action="{{ route('asignar.destroy', $user) }}" method="post"
                                class="formEliminar">
                                @csrf
                                @method('delete')
                                {!! $btnDelete !!}
                            </form>
                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </div>

@stop
@section('css')
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('.formEliminar').submit(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "Se va a eliminar un registro.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sí, eliminarlo"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Si se confirma, entonces envía el formulario
                        this.submit();
                    }
                });
            });
        });
    </script>

@stop
