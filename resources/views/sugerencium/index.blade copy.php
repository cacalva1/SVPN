@extends('layouts.app')

@section('template_title')
    Sugerencium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sugerencium') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('sugerencia.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>


                                        <th>Fecha Solicitud</th>
                                        <th>Cod Circuito</th>
                                        <th>Cod Subcircuito</th>
                                        <th>Tipo</th>
                                        <th>Detalle</th>
                                        <th>Contacto</th>
                                        <th>Apellidos</th>
                                        <th>Nombres</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sugerencia as $sugerencium)
                                        <tr>


                                            <td>{{ $sugerencium->fecha_solicitud }}</td>
                                            <td>{{ $sugerencium->cod_circuito }}</td>
                                            <td>{{ $sugerencium->cod_subcircuito }}</td>
                                            <td>{{ $sugerencium->tipo }}</td>
                                            <td>{{ $sugerencium->detalle }}</td>
                                            <td>{{ $sugerencium->contacto }}</td>
                                            <td>{{ $sugerencium->apellidos }}</td>
                                            <td>{{ $sugerencium->nombres }}</td>

                                            <td>
                                                <form action="{{ route('sugerencia.destroy', $sugerencium->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('sugerencia.show', $sugerencium->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('sugerencia.edit', $sugerencium->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#example').DataTable({
            responsive: true
        });
    </script>
@stop
