@extends('layouts.app')

@section('template_title')
    {{ $curso->name ?? __('Show') . " " . __('Curso') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Curso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('cursos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $curso->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $curso->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Inicio:</strong>
                                    {{ $curso->fecha_inicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Fin:</strong>
                                    {{ $curso->fecha_fin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $curso->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Docente Id:</strong>
                                    {{ $curso->docente_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
