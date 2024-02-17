<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $policia->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $policia->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $policia->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento', 'Fecha de nacimiento:') }}
            {{ Form::date('fecha_nacimiento', $policia->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_sangre', 'Tipo de sangre:') }}
            {{ Form::select('tipo_sangre', ['' => 'Selecciona Tipo de Sangre', 'A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+', 'O-' => 'O-'], $policia->tipo_sangre, ['class' => 'form-control' . ($errors->has('tipo_sangre') ? ' is-invalid' : '')]) }}
            {!! $errors->first('tipo_sangre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('ciudad_nacimiento') }}
            {{ Form::text('ciudad_nacimiento', $policia->ciudad_nacimiento, ['class' => 'form-control' . ($errors->has('ciudad_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad Nacimiento']) }}
            {!! $errors->first('ciudad_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::text('celular', $policia->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rango', 'Rango:') }}
            {{ Form::select('rango', [
        '' => 'Selecciona Rango',
        'Policia' => 'Policía',
        'CaboSegundo' => 'Cabo Segundo',
        'CaboPrimero' => 'Cabo Primero',
        'SargentoSegundo' => 'Sargento Segundo',
        'SargentoPrimero' => 'Sargento Primero',
        'SuboficialSegundo' => 'Suboficial Segundo',
        'SuboficialPrimero' => 'Suboficial Primero',
        'SuboficialMayor' => 'Suboficial Mayor',
        'SubtenientedePolicía' => 'Subteniente de Policía',
        'TenientedePolicía' => 'Teniente de Policía',
        'CapitandePolicía' => 'Capitán de Policía',
        'MayordePolicía' => 'Mayor de Policía',
        'TenienteCoroneldePolicía' => 'Teniente Coronel de Policía',
        'CoroneldePolicía' => 'Coronel de Policía',
        'GeneraldeDistrito' => 'General de Distrito',
        'GeneralInspector' => 'General Inspector',
        'GeneralSuperior' => 'General Superior',
    ], $policia->rango, ['class' => 'form-control' . ($errors->has('rango') ? ' is-invalid' : '')]) }}
            {!! $errors->first('rango', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('rol') }}
            {{ Form::text('rol', $policia->rol, ['class' => 'form-control' . ($errors->has('rol') ? ' is-invalid' : ''), 'placeholder' => 'Rol']) }}
            {!! $errors->first('rol', '<div class="invalid-feedback">:message</div>') !!}
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

</div>