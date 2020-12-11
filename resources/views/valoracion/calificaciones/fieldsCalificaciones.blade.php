<div class="form-group">
    <label for="exampleInputEmail1">Calificaciones</label>
    {!! Form::text('calificacion',null,$attributes=['class' => 'form-control']) !!}

    @includeWhen(count($errors->get('calificacion'))>0, 'errors.message', ['errores' => $errors->get('calificacion')])
    <small id="emailHelp" class="form-text text-muted">Brinde una calificación</small>
</div>