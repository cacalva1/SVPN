@extends('adminlte::page')

@section('template_title')
   Reportes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historico Personal Pertrecho') }}
                            </span>

                           
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
                                        <th>No</th>
                                        
										<th>Fecha Accion</th>
										<th>Policia </th>
										<th>Nombre arma asignada </th>
                                        <th>Accion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historicoPersonalPertrechos as $historicoPersonalPertrecho)
                                        <tr>
                                            <td>{{ $historicoPersonalPertrecho->id}}</td>
                                            
											<td>{{ $historicoPersonalPertrecho->fecha_accion }}</td>
											<td>{{ $historicoPersonalPertrecho->nombres }}</td>
											<td>{{ $historicoPersonalPertrecho->descripcion }}</td>
											<td>{{ $historicoPersonalPertrecho->accion }}</td>

         
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
