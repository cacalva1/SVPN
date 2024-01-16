<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_solicitud') }}
            {{ Form::text('fecha_solicitud', $solicitudMantenimiento->fecha_solicitud, ['class' => 'form-control' . ($errors->has('fecha_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Solicitud']) }}
            {!! $errors->first('fecha_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_solicitud') }}
            {{ Form::text('hora_solicitud', $solicitudMantenimiento->hora_solicitud, ['class' => 'form-control' . ($errors->has('hora_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Hora Solicitud']) }}
            {!! $errors->first('hora_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje_actual') }}
            {{ Form::text('Kilometraje_actual', $solicitudMantenimiento->Kilometraje_actual, ['class' => 'form-control' . ($errors->has('Kilometraje_actual') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje Actual']) }}
            {!! $errors->first('Kilometraje_actual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $solicitudMantenimiento->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('policia_id') }}
            {{ Form::text('policia_id', $solicitudMantenimiento->policia_id, ['class' => 'form-control' . ($errors->has('policia_id') ? ' is-invalid' : ''), 'placeholder' => 'Policia Id']) }}
            {!! $errors->first('policia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vehiculo_id') }}
            {{ Form::text('vehiculo_id', $solicitudMantenimiento->vehiculo_id, ['class' => 'form-control' . ($errors->has('vehiculo_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo Id']) }}
            {!! $errors->first('vehiculo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>