<div class="row">
    <div class="col-lg-12">

        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            {!! Form::text('nombre',null,$attributes=['class' => 'form-control']) !!}

            @includeWhen(count($errors->get('nombre'))>0, 'errors.message', ['errores' => $errors->get('nombre')])

        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Tipo</label>
           
                @if ($model)
                <select-combustibles :selected="{{ $model->tipo}}" url="/api-app/tipos" nombre="tipo_id"
                    label="nombre"/>
                @else
                <select-combustibles url="/api-app/tipos" nombre="tipo_id" label="nombre" />
                @endif
            
            @includeWhen(count($errors->get('tipo_id'))>0, 'errors.message', ['errores' => $errors->get('tipo_id')])
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Dirección</label>
            {!! Form::text('direccion',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('direccion'))>0, 'errors.message', ['errores' => $errors->get('direccion')])
        </div>

    </div>
