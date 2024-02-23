<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_asignacion') }}
            {{ Form::text('fecha_asignacion', $personalPertrecho->fecha_asignacion, ['class' => 'form-control' . ($errors->has('fecha_asignacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Asignacion']) }}
            {!! $errors->first('fecha_asignacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('policia_id') }}
            {{ Form::text('policia_id', $personalPertrecho->policia_id, ['class' => 'form-control' . ($errors->has('policia_id') ? ' is-invalid' : ''), 'placeholder' => 'Policia Id']) }}
            {!! $errors->first('policia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pertrecho_id') }}
            {{ Form::text('pertrecho_id', $personalPertrecho->pertrecho_id, ['class' => 'form-control' . ($errors->has('pertrecho_id') ? ' is-invalid' : ''), 'placeholder' => 'Pertrecho Id']) }}
            {!! $errors->first('pertrecho_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>