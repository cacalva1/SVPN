<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <label for="tipo_vehiculo">Tipo Vehiculo: </label>
            <select type="text" class="form-control" name="tipo_vehiculo" id="tipo_vehiculo">
                <option value="{{ $vehiculo->tipo_vehiculo }}">{{ $vehiculo->tipo_vehiculo }}</option>
                <option value="Automovil">Automovil</option>
                <option value="Moto">Moto</option>
                <option value="Camioneta">Camioneta</option>
            </select>
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
            <label for="modelo">Modelo:</label>
            <select class="form-control" name="modelo" id="modelo">
                <?php
                $modeloActual = date('Y');
                for ($modelo = 2010; $modelo <= $modeloActual; $modelo++) {
                    echo '<option value="' . $modelo . '"';
                    if ($modelo == $vehiculo->modelo) {
                        echo ' selected';
                    }
                    echo '>' . $modelo . '</option>';
                }
                ?>
            </select>
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
            <label for="capacidad_pasajeros">Capacidad de pasajeros:</label>
            <select type="number" class="form-control" name="capacidad_pasajeros" id="capacidad_pasajeros">
                <option value="{{ $vehiculo->capacidad_pasajeros }}">{{ $vehiculo->capacidad_pasajeros }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tipo">Estado:</label>
            <select type="text" class="form-control" name="estado" id="estado">
                <option value="Activo">Activo</option>
                <option value="Desactivo">Desactivo</option>
            </select>
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a href="{{ route('vehiculos.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
</div>
