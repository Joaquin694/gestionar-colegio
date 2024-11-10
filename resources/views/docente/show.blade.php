@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? __('Show') . " " . __('Docente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('docentes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $docente->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido:</strong>
                                    {{ $docente->apellido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $docente->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $docente->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Departamento:</strong>
                                    {{ $docente->departamento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Contratacion:</strong>
                                    {{ $docente->fecha_contratacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Empleo:</strong>
                                    {{ $docente->estado_empleo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
