@extends('layouts.app')

@section('template_title')
    Reclamos y Sugerencias
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center; align = center'">

                            <span id="card_title">
                                <h3> {{ __('Reporte de Sugerencias y Reclamos') }}</h3>
                            </span>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <form method="POST" action="{{ route('reporte.reportes') }}">
                                    @csrf
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {{ Form::label('fecha_inicial') }}
                                            {{ Form::date('fecha_ini', $v_ini, ['class' => 'form-control' . ($errors->has('fecha_ini') ? ' is-invalid' : ''), 'placeholder' => 'Fecha inicio']) }}
                                            {!! $errors->first('fecha_ini', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('fecha_final') }}
                                            {{ Form::date('fecha_fin', $v_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha inicio']) }}
                                            {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-sm float-right">Enviar</button>
                                    </div>
                                </form>
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
                                            <th>Fecha inicio</th>
                                            <th>Fecha Fin</th>
                                            <th># </th>
                                            <th>Tipo</th>
                                            <th>Circuito</th>
                                            <th>Subcircuito</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sugerencia as $sugerencium)
                                            <tr>
                                                <td>{{ $sugerencium->fecha_in }}</td>
                                                <td>{{ $sugerencium->fecha_sal }}</td>
                                                <td>{{ $sugerencium->contador }}</td>
                                                <td>{{ $sugerencium->tipo }}</td>
                                                <td>{{ $sugerencium->nombre_circuito }}</td>
                                                <td>{{ $sugerencium->nombre_subcircuito }}</td>
                                                <td>
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
        <a href="{{ route('generate-pdf.generatePDF') }}" class="btn btn-success">Exportar</a>
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
