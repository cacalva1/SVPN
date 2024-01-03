<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_vehiculo') }}
            {{ Form::text('tipo_vehiculo', $vehiculo->tipo_vehiculo, ['class' => 'form-control' . ($errors->has('tipo_vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Vehiculo']) }}
            {!! $errors->first('tipo_vehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $vehiculo->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('chasis') }}
            {{ Form::text('chasis', $vehiculo->chasis, ['class' => 'form-control' . ($errors->has('chasis') ? ' is-invalid' : ''), 'placeholder' => 'Chasis']) }}
            {!! $errors->first('chasis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $vehiculo->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $vehiculo->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motor') }}
            {{ Form::text('motor', $vehiculo->motor, ['class' => 'form-control' . ($errors->has('motor') ? ' is-invalid' : ''), 'placeholder' => 'Motor']) }}
            {!! $errors->first('motor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometraje') }}
            {{ Form::text('kilometraje', $vehiculo->kilometraje, ['class' => 'form-control' . ($errors->has('kilometraje') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje']) }}
            {!! $errors->first('kilometraje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cilindraje') }}
            {{ Form::text('cilindraje', $vehiculo->cilindraje, ['class' => 'form-control' . ($errors->has('cilindraje') ? ' is-invalid' : ''), 'placeholder' => 'Cilindraje']) }}
            {!! $errors->first('cilindraje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacidad_carga') }}
            {{ Form::text('capacidad_carga', $vehiculo->capacidad_carga, ['class' => 'form-control' . ($errors->has('capacidad_carga') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad Carga']) }}
            {!! $errors->first('capacidad_carga', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacidad_pasajeros') }}
            {{ Form::text('capacidad_pasajeros', $vehiculo->capacidad_pasajeros, ['class' => 'form-control' . ($errors->has('capacidad_pasajeros') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad Pasajeros']) }}
            {!! $errors->first('capacidad_pasajeros', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $vehiculo->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>