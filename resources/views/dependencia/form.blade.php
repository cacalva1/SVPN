<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <label for="provincia">Provincia:</label>
            <input type="text" class="form-control input-lg" name="provincia" id="provincia"
                value="{{ $dependencia->provincia }}" required oninput="this.value = this.value.toUpperCase()">
            <!--<input type="hidden" id="dependenciaId" name="dependenciaId" value="">-->
        </div>
        <div class="form-group">
            {{ Form::label('num_distritos') }}
            {{ Form::text('num_distritos', $dependencia->num_distritos, ['class' => 'form-control' . ($errors->has('num_distritos') ? ' is-invalid' : ''), 'placeholder' => 'Num Distritos']) }}
            {!! $errors->first('num_distritos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parroquia') }}
            {{ Form::text('parroquia', $dependencia->parroquia, ['class' => 'form-control' . ($errors->has('parroquia') ? ' is-invalid' : ''), 'placeholder' => 'Parroquia']) }}
            {!! $errors->first('parroquia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_distrito') }}
            {{ Form::text('cod_distrito', $dependencia->cod_distrito, ['class' => 'form-control' . ($errors->has('cod_distrito') ? ' is-invalid' : ''), 'placeholder' => 'Cod Distrito']) }}
            {!! $errors->first('cod_distrito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_distrito') }}
            {{ Form::text('nombre_distrito', $dependencia->nombre_distrito, ['class' => 'form-control' . ($errors->has('nombre_distrito') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Distrito']) }}
            {!! $errors->first('nombre_distrito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_circuitos') }}
            {{ Form::text('num_circuitos', $dependencia->num_circuitos, ['class' => 'form-control' . ($errors->has('num_circuitos') ? ' is-invalid' : ''), 'placeholder' => 'Num Circuitos']) }}
            {!! $errors->first('num_circuitos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('cod_circuito') }}
            {{ Form::text('cod_circuito', $dependencia->cod_circuito, ['class' => 'form-control' . ($errors->has('cod_circuito') ? ' is-invalid' : ''), 'placeholder' => 'Cod Circuito']) }}
            {!! $errors->first('cod_circuito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_circuito') }}
            {{ Form::text('nombre_circuito', $dependencia->nombre_circuito, ['class' => 'form-control' . ($errors->has('nombre_circuito') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Circuito']) }}
            {!! $errors->first('nombre_circuito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_subcircuitos') }}
            {{ Form::text('num_subcircuitos', $dependencia->num_subcircuitos, ['class' => 'form-control' . ($errors->has('num_subcircuitos') ? ' is-invalid' : ''), 'placeholder' => 'Num Subcircuitos']) }}
            {!! $errors->first('num_subcircuitos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_subcircuito') }}
            {{ Form::text('cod_subcircuito', $dependencia->cod_subcircuito, ['class' => 'form-control' . ($errors->has('cod_subcircuito') ? ' is-invalid' : ''), 'placeholder' => 'Cod Subcircuito']) }}
            {!! $errors->first('cod_subcircuito', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('nombre_subcircuito') }}
            {{ Form::text('nombre_subcircuito', $dependencia->nombre_subcircuito, ['class' => 'form-control' . ($errors->has('nombre_subcircuito') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Subcircuito']) }}
            {!! $errors->first('nombre_subcircuito', '<div class="invalid-feedback">:message</div>') !!}
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
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
