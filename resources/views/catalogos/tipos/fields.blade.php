<div class="form-group">
    <label for="exampleInputEmail1">Tipo de Lugar</label>
    {!! Form::text('nombre',null,$attributes=['class' => 'form-control']) !!}

    @includeWhen(count($errors->get('nombre'))>0, 'errors.message', ['errores' => $errors->get('nombre')])
    <small id="emailHelp" class="form-text text-muted">Describa el nuevo tipo de lugar</small>
</div>