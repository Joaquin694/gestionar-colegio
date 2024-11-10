@extends('layouts.app')

@section('template_title')
    {{ $matricula->name ?? __('Show') . " " . __('Matricula') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Matricula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('matriculas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Estudiante Id:</strong>
                                    {{ $matricula->estudiante_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $matricula->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $matricula->tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Monto:</strong>
                                    {{ $matricula->monto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $matricula->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
