@extends('layouts.app')

@section('template_title')
    Estudiantes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Estudiantes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Fecha Nacimiento</th>
									<th >Direccion</th>
									<th >Telefono</th>
									<th >Email</th>
									<th >Fecha Matricula</th>
									<th >Estado Matricula</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantes as $estudiante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $estudiante->nombre }}</td>
										<td >{{ $estudiante->apellido }}</td>
										<td >{{ $estudiante->fecha_nacimiento }}</td>
										<td >{{ $estudiante->direccion }}</td>
										<td >{{ $estudiante->telefono }}</td>
										<td >{{ $estudiante->email }}</td>
										<td >{{ $estudiante->fecha_matricula }}</td>
										<td >{{ $estudiante->estado_matricula }}</td>

                                            <td>
                                                <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estudiantes.show', $estudiante->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estudiantes.edit', $estudiante->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $estudiantes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
