<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_asignacion') }}
            {{ Form::text('fecha_asignacion', $vehiculoSubcircuito->fecha_asignacion, ['class' => 'form-control' . ($errors->has('fecha_asignacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Asignacion']) }}
            {!! $errors->first('fecha_asignacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('policia_id') }}
            {{ Form::text('policia_id', $vehiculoSubcircuito->policia_id, ['class' => 'form-control' . ($errors->has('policia_id') ? ' is-invalid' : ''), 'placeholder' => 'Policia Id']) }}
            {!! $errors->first('policia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dependencia_id') }}
            {{ Form::text('dependencia_id', $vehiculoSubcircuito->dependencia_id, ['class' => 'form-control' . ($errors->has('dependencia_id') ? ' is-invalid' : ''), 'placeholder' => 'Dependencia Id']) }}
            {!! $errors->first('dependencia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>