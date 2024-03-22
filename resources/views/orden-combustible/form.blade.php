<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cantGalonesGasolina') }}
            {{ Form::text('cantGalonesGasolina', $ordenCombustible->cantGalonesGasolina, ['class' => 'form-control' . ($errors->has('cantGalonesGasolina') ? ' is-invalid' : ''), 'placeholder' => 'Cantgalonesgasolina']) }}
            {!! $errors->first('cantGalonesGasolina', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_policia') }}
            {{ Form::text('id_policia', $ordenCombustible->id_policia, ['class' => 'form-control' . ($errors->has('id_policia') ? ' is-invalid' : ''), 'placeholder' => 'Id Policia']) }}
            {!! $errors->first('id_policia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_vehiculo') }}
            {{ Form::text('id_vehiculo', $ordenCombustible->id_vehiculo, ['class' => 'form-control' . ($errors->has('id_vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Id Vehiculo']) }}
            {!! $errors->first('id_vehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometraje_actual') }}
            {{ Form::text('kilometraje_actual', $ordenCombustible->kilometraje_actual, ['class' => 'form-control' . ($errors->has('kilometraje_actual') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje Actual']) }}
            {!! $errors->first('kilometraje_actual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_gasolinera') }}
            {{ Form::text('nombre_gasolinera', $ordenCombustible->nombre_gasolinera, ['class' => 'form-control' . ($errors->has('nombre_gasolinera') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Gasolinera']) }}
            {!! $errors->first('nombre_gasolinera', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>