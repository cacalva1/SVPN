@extends('adminlte::page')
@section('title', 'Roles')
@section('content_header')
    <h1>Administración de Roles</h1>
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
                    'language' => ['url' => 'http://localhost/sistemaVehicularPolicia/public/dist/js/es-Es.json'],
                ];
            @endphp

            <x-adminlte-datatable id="table1" :heads="$heads" :config="$config">
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td><a href= "{{ route('roles.edit', $role) }}"
                                class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                            <form style="display: inline" action="{{ route('roles.destroy', $role) }}" method="post"
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
    {{-- Themed --}}
    <x-adminlte-modal id="modalPurple" title="Nuevo Rol" theme="primary" icon="fas fa-bolt" size='lg'
        disable-animations>
        <form action = "{{ route('roles.store') }}" method= "post">
            @csrf
            <div class="row">
                <x-adminlte-input name="nombre" label="Nombre" placeholder="Escriba el nombre de Rol"
                    fgroup-class="col-md-6" disable-feedback />
            </div>
            <x-adminlte-button type="submit" label="Guardar" theme="primary" icon="fas fa-key" />
        </form>
    </x-adminlte-modal>
    {{-- Example button to open modal --}}

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
