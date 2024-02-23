@extends('adminlte::page')

@section('template_title')
    Pertrecho
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pertrecho') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pertrechos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Tipoarma</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Codigo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pertrechos as $pertrecho)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pertrecho->tipoArma }}</td>
											<td>{{ $pertrecho->Nombre }}</td>
											<td>{{ $pertrecho->descripcion }}</td>
											<td>{{ $pertrecho->codigo }}</td>

                                            <td>
                                                <form action="{{ route('pertrechos.destroy',$pertrecho->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pertrechos.show',$pertrecho->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pertrechos.edit',$pertrecho->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pertrechos->links() !!}
            </div>
        </div>
    </div>
@endsection
