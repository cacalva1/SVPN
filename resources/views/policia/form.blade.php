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
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"
                value="{{ $policia->fecha_nacimiento }}">
        </div>
        <div class="form-group">
            <label for="tipo_sangre">Tipo de sangre:</label>
            <select type="text" class="form-control" name="tipo_sangre" id="tipo_sangre">
                <option value="{{ $policia->tipo_sangre }}">{{ $policia->tipo_sangre }}</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
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
            <label for="rango">Rango:</label>
            <select type="text" class="form-control" name="rango" id="rango">
                <option value="{{ $policia->rango }}">{{ $policia->rango }}</option>
                <option value="Policia">Policía</option>
                <option value="CaboSegundo">Cabo Segundo</option>
                <option value="CaboPrimero">Cabo Primero</option>
                <option value="SargentoSegundo">Sargento Segundo</option>
                <option value="SargentoPrimero">Sargento Primero</option>
                <option value="SuboficialSegundo">Suboficial Segundo</option>
                <option value="SuboficialPrimero">Suboficial Primero</option>
                <option value="SuboficialMayor">Suboficial Mayor</option>
                <option value="SubtenientedePolicía">Subteniente de Policía</option>
                <option value="TenientedePolicía">Teniente de Policía</option>
                <option value="CapitandePolicía">Capitán de Policía</option>
                <option value="MayordePolicía">Mayor de Policía</option>
                <option value="TenienteCoroneldePolicía">Teniente Coronel de Policía</option>
                <option value="CoroneldePolicía">Coronel de Policía</option>
                <option value="GeneraldeDistrito">General de Distrito</option>
                <option value="GeneralInspector">General Inspector</option>
                <option value="GeneralSuperior">General Superior</option>

            </select>

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
