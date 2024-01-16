<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_asignacion') }}
            {{ Form::text('fecha_asignacion', $personalSubcircuito->fecha_asignacion, ['class' => 'form-control' . ($errors->has('fecha_asignacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Asignacion']) }}
            {!! $errors->first('fecha_asignacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('policia_id') }}
            {{ Form::text('policia_id', $personalSubcircuito->policia_id, ['class' => 'form-control' . ($errors->has('policia_id') ? ' is-invalid' : ''), 'placeholder' => 'Policia Id']) }}
            {!! $errors->first('policia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subcircuito_id') }}
            {{ Form::text('subcircuito_id', $personalSubcircuito->subcircuito_id, ['class' => 'form-control' . ($errors->has('subcircuito_id') ? ' is-invalid' : ''), 'placeholder' => 'Subcircuito Id']) }}
            {!! $errors->first('subcircuito_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>