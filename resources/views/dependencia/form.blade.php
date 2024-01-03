<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('dependencia') }}
            {{ Form::text('dependencia', $dependencia->dependencia, ['class' => 'form-control' . ($errors->has('dependencia') ? ' is-invalid' : ''), 'placeholder' => 'Dependencia']) }}
            {!! $errors->first('dependencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idProvincia') }}
            {{ Form::text('idProvincia', $dependencia->idProvincia, ['class' => 'form-control' . ($errors->has('idProvincia') ? ' is-invalid' : ''), 'placeholder' => 'Idprovincia']) }}
            {!! $errors->first('idProvincia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idParroquia') }}
            {{ Form::text('idParroquia', $dependencia->idParroquia, ['class' => 'form-control' . ($errors->has('idParroquia') ? ' is-invalid' : ''), 'placeholder' => 'Idparroquia']) }}
            {!! $errors->first('idParroquia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idDistrito') }}
            {{ Form::text('idDistrito', $dependencia->idDistrito, ['class' => 'form-control' . ($errors->has('idDistrito') ? ' is-invalid' : ''), 'placeholder' => 'Iddistrito']) }}
            {!! $errors->first('idDistrito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCircuito') }}
            {{ Form::text('idCircuito', $dependencia->idCircuito, ['class' => 'form-control' . ($errors->has('idCircuito') ? ' is-invalid' : ''), 'placeholder' => 'Idcircuito']) }}
            {!! $errors->first('idCircuito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idSubcircuito') }}
            {{ Form::text('idSubcircuito', $dependencia->idSubcircuito, ['class' => 'form-control' . ($errors->has('idSubcircuito') ? ' is-invalid' : ''), 'placeholder' => 'Idsubcircuito']) }}
            {!! $errors->first('idSubcircuito', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>