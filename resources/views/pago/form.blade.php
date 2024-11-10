<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="estudiante_id" class="form-label">{{ __('Estudiante Id') }}</label>
            <input type="text" name="estudiante_id" class="form-control @error('estudiante_id') is-invalid @enderror" value="{{ old('estudiante_id', $pago?->estudiante_id) }}" id="estudiante_id" placeholder="Estudiante Id">
            {!! $errors->first('estudiante_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monto" class="form-label">{{ __('Monto') }}</label>
            <input type="text" name="monto" class="form-control @error('monto') is-invalid @enderror" value="{{ old('monto', $pago?->monto) }}" id="monto" placeholder="Monto">
            {!! $errors->first('monto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_pago" class="form-label">{{ __('Fecha Pago') }}</label>
            <input type="text" name="fecha_pago" class="form-control @error('fecha_pago') is-invalid @enderror" value="{{ old('fecha_pago', $pago?->fecha_pago) }}" id="fecha_pago" placeholder="Fecha Pago">
            {!! $errors->first('fecha_pago', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="concepto" class="form-label">{{ __('Concepto') }}</label>
            <input type="text" name="concepto" class="form-control @error('concepto') is-invalid @enderror" value="{{ old('concepto', $pago?->concepto) }}" id="concepto" placeholder="Concepto">
            {!! $errors->first('concepto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $pago?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>