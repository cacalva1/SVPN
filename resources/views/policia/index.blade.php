@extends('adminlte::page')
@section('title', 'Policias')
@section('content_header')
<h1>Personal Policial</h1>
<div class="float-right">
                                <a href="{{ route('policias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
@stop
@section('content')
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
                                        <th>No</th>
                                        
										<th>Cedula</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Fecha Nacimiento</th>
										<th>Tipo Sangre</th>
										<th>Ciudad Nacimiento</th>
										<th>Celular</th>
										<th>Rango</th>
										<th>Id Dependencia</th>
										<th>Rol</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
        </thead>
        <tbody>
                                    @foreach ($policias as $policia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
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
                                                <form action="{{ route('policias.destroy',$policia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('policias.show',$policia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('policias.edit',$policia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
</table>
@stop

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
