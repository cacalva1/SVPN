<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_accion') }}
            {{ Form::text('fecha_accion', $historicoPersonalPertrecho->fecha_accion, ['class' => 'form-control' . ($errors->has('fecha_accion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Accion']) }}
            {!! $errors->first('fecha_accion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('policia_id') }}
            {{ Form::text('policia_id', $historicoPersonalPertrecho->policia_id, ['class' => 'form-control' . ($errors->has('policia_id') ? ' is-invalid' : ''), 'placeholder' => 'Policia Id']) }}
            {!! $errors->first('policia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pertrecho_id') }}
            {{ Form::text('pertrecho_id', $historicoPersonalPertrecho->pertrecho_id, ['class' => 'form-control' . ($errors->has('pertrecho_id') ? ' is-invalid' : ''), 'placeholder' => 'Pertrecho Id']) }}
            {!! $errors->first('pertrecho_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('accion') }}
            {{ Form::text('accion', $historicoPersonalPertrecho->accion, ['class' => 'form-control' . ($errors->has('accion') ? ' is-invalid' : ''), 'placeholder' => 'Accion']) }}
            {!! $errors->first('accion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>