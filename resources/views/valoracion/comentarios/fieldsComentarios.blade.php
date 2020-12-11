<div class="form-group">
    <label for="exampleInputEmail1">Comentarios</label>
    {!! Form::text('comentario',null,$attributes=['class' => 'form-control']) !!}

    @includeWhen(count($errors->get('comentario'))>0, 'errors.message', ['errores' => $errors->get('comentario')])
    <small id="emailHelp" class="form-text text-muted">Escriba un comentario</small>
</div>