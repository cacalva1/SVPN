<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            {{ Form::label('Circuito') }}

            <select name="cod_circuito" id="cod_circuito" class="form-control">
                @foreach ($circuitos as $circuito)
                    <option value="{{ $circuito->cod_circuito }}">{{ $circuito->nombre_circuito }}</option>
                @endforeach
            </select>
            {!! $errors->first('cod_circuito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Subcircuito') }}

            <select name="cod_subcircuito" id="cod_subcircuito" class="form-control">
                @foreach ($subcircuitos as $subcircuito)
                    <option value="{{ $subcircuito->cod_subcircuito }}">{{ $subcircuito->nombre_subcircuito }}</option>
                @endforeach
            </select>
            {!! $errors->first('cod_subcircuito', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <select type="text" class="form-control" name="tipo" id="tipo">
                <option value="RECLAMO">RECLAMO</option>
                <option value="SUGERENCIA">SUGERENCIA</option>
            </select>
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::text('detalle', $sugerencium->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Detalle']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto') }}
            {{ Form::text('contacto', $sugerencium->contacto, ['class' => 'form-control' . ($errors->has('contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $sugerencium->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $sugerencium->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Registrar Solicitud') }}</button>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    document.getElementById('cod_circuito').addEventListener('change', function() {
        var circuitoId = this.value;

        // Realiza una solicitud AJAX para obtener las subcategorías
        fetch('/subcircuitos/' + circuitoId)
            .then(response => response.json())
            .then(subcircuitos => {
                var subcategoriaSelect = document.getElementById('cod_subcircuito');
                subcategoriaSelect.innerHTML = '';

                subcircuitos.forEach(subcircuito => {
                    var option = document.createElement('option');
                    option.value = subcircuito.cod_subcircuito;
                    option.text = subcircuito.nombre_subcircuito;
                    subcategoriaSelect.add(option);

                });
            })
            .catch(error => {
                console.error('Error en la solicitud AJAX:', error);
            });
    });
</script>
