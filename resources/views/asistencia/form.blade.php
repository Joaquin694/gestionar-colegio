<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="estudiante_id" class="form-label">{{ __('Estudiante Id') }}</label>
            <input type="text" name="estudiante_id" class="form-control @error('estudiante_id') is-invalid @enderror" value="{{ old('estudiante_id', $asistencia?->estudiante_id) }}" id="estudiante_id" placeholder="Estudiante Id">
            {!! $errors->first('estudiante_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="docente_id" class="form-label">{{ __('Docente Id') }}</label>
            <input type="text" name="docente_id" class="form-control @error('docente_id') is-invalid @enderror" value="{{ old('docente_id', $asistencia?->docente_id) }}" id="docente_id" placeholder="Docente Id">
            {!! $errors->first('docente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="curso_id" class="form-label">{{ __('Curso Id') }}</label>
            <input type="text" name="curso_id" class="form-control @error('curso_id') is-invalid @enderror" value="{{ old('curso_id', $asistencia?->curso_id) }}" id="curso_id" placeholder="Curso Id">
            {!! $errors->first('curso_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $asistencia?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $asistencia?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>