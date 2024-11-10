@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? __('Show') . " " . __('Estudiante') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('estudiantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $estudiante->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido:</strong>
                                    {{ $estudiante->apellido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nacimiento:</strong>
                                    {{ $estudiante->fecha_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $estudiante->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $estudiante->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $estudiante->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Matricula:</strong>
                                    {{ $estudiante->fecha_matricula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Matricula:</strong>
                                    {{ $estudiante->estado_matricula }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
