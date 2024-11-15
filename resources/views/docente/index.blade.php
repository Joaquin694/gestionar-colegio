@extends('layouts.app')

@section('template_title')
    Docentes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Docentes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('docentes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre</th>
									<th >Apellido</th>
									<th >Email</th>
									<th >Telefono</th>
									<th >Departamento</th>
									<th >Fecha Contratacion</th>
									<th >Estado Empleo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($docentes as $docente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $docente->nombre }}</td>
										<td >{{ $docente->apellido }}</td>
										<td >{{ $docente->email }}</td>
										<td >{{ $docente->telefono }}</td>
										<td >{{ $docente->departamento }}</td>
										<td >{{ $docente->fecha_contratacion }}</td>
										<td >{{ $docente->estado_empleo }}</td>

                                            <td>
                                                <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('docentes.show', $docente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('docentes.edit', $docente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $docentes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
