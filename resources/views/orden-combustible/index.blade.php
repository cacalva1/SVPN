@extends('adminlte::page')
@section('title', 'Solicitud Orden de Combustible')
@section('content_header')

    <h1>Solicitud Orden Combustible</h1>
@stop
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Solicitud combustible') }}
                            </span>
                            <button name ="calendario" id="calendario" class="btn btn-success" data-toggle="modal"
                                data-target="#MantenimientoModal{{ $policia->id }}"><i class="fa fa-pencil">Solicitud de Orden de combustible</i></button>
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
                                        <th>Hora Solicitud</th>
                                        <th>Kilometraje Actual</th>
                                        <th>Nombre Gasolinera</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicitudMantenimientos as $solicitudMantenimiento)
                                        <tr>
                                            <td>{{ $solicitudMantenimiento->fecha }}</td>
                                            <td>{{ $solicitudMantenimiento->hora }}</td>
                                            <td>{{ $solicitudMantenimiento->kilometraje_actual }}</td>
                                            <td>{{ $solicitudMantenimiento->nombre_gasolinera }}</td>


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
    <div class="modal fade" id="MantenimientoModal{{ $policia->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post"
                    action="{{ route('OrdenCombustible.update', ['id_vehiculo' => $vehiculo->id, 'id_policia' => $policia->id]) }}">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="user">Usuario:</label>
                                <input type="text" class="form-control" name="id" id="id"
                                    value="{{ $policia->nombres }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="user">Placa {{ $vehiculo->tipo_vehiculo }}:</label>
                                <input type="text" class="form-control" name="vehiculo_id" id="vehiculo_id"
                                    value="{{ $vehiculo->placa }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="fechamantenimiento">Fecha:</label>
                                <input type="date" class="form-control" name="fechamantenimiento" id="fechamantenimiento"
                                    value="{{ date('Y-m-d\TH-i') }}">
                            </div>
                            <div class="form-group">
                                <label for="horamantenimiento">Hora:</label>
                                <input type="time" class="form-control" name="horamantenimiento" id="horamantenimiento"
                                    value= "{{ old('horamantenimiento', date('Y-m-d')) }}">
                            </div>
                            <div class="form-group">
                                <label for="cantGalonesCombustible">Cantidad de Galones de combustible:</label>
                                <input type="text" class="form-control" name="cantGalonesCombustible" id="cantGalonesCombustible"
                                    placeholder="Ingrese la cantidad de galones de combustible">
                            </div>
                            <div class="form-group">
                                <label for="kilometraje">Kilometraje actual:</label>
                                <input type="number" class="form-control" name="kilometraje" id="kilometraje"
                                    value="{{ $vehiculo->kilometraje }}" min="{{ $vehiculo->kilometraje }}">
                            </div>
                            <div class="form-group">
                                <label for="nombreGasolinera">Nombre Gasolinera:</label>
                                <textarea class="form-control" name="nombreGasolinera" id="nombreGasolinera" placeholder="Escriba el nombre de la gasolinera"
                                    maxlength="500"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Solicitar orden Combustible</button>
                        <button type="button" class="btn btn-danger " data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script type="text/javascript">
        $('.table').on('click', '.EliminarPolicia', function() {

            var Pid = $(this).attr('Pid');
            var nombre = $(this).attr('nombre');

            Swal.fire({

                title: '¿Seguro que desea eliminar el Policia ' + nombre + '?',
                icon: 'Warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                confirmButtonColor: '#3085d6'

            }).then((result) => {

                if (result.isConfirmed) {

                    //window.location = "Inicio";
                    window.location = "Eliminar-Policia/" + Pid;
                }
            })
        })

        $('.table').on('click', '.EliminarVehiculo', function() {

            var Vid = $(this).attr('Vid');
            var Placa = $(this).attr('Placa');

            Swal.fire({

                title: '¿Seguro que desea eliminar el vehiculo: ' + Placa + '?',
                icon: 'Warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                confirmButtonColor: '#3085d6'

            }).then((result) => {

                if (result.isConfirmed) {

                    //window.location = "Inicio";
                    window.location = "EliminarVehiculo/" + Vid;
                }
            })

        })

        $('.table').on('click', '.EliminarDependencia', function() {

            var Did = $(this).attr('Did');
            var nombre = $(this).attr('nombre');

            Swal.fire({

                title: '¿Seguro que desea eliminar el subcircuito ' + nombre + '?',
                icon: 'Warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                confirmButtonColor: '#3085d6'

            }).then((result) => {

                if (result.isConfirmed) {

                    //window.location = "Inicio";
                    window.location = "Eliminar-Dependencia/" + Did;
                }
            })
        })
    </script>

    <script type="text/javascript">
        var date = new Date();
        var d = date.getDate(),
            m = date.getMonth(),
            a = date.getFullYear()

        $('#calendario').fullCalendar({
            defaultView: 'agendaWeek',
            hiddenDays: [0, 6],
            scrollTime: "08:00:00",
            minTime: "08:00:00",
            maxTime: "18:00:00",

            dayClick: function(date, jsEvent, view) {
                var fecha = date.format();
                var hora = ("01:00:00").split(":");
                Fechamantenimiento = fecha.split("T");
                Horamantenimiento = fecha.split("T");
                $('#MantenimientoModal').modal();
                $("#fechamantenimiento").val(Fechamantenimiento[0]);
                $("#horamantenimiento").val(Horamantenimiento[1]);
            }
        });
    </script>

@stop
@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@stop
