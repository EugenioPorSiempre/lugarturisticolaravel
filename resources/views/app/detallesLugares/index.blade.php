@extends('layouts.app')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Dirección</label>
                        {!! Form::text('direccion',null,$attributes=['class' => 'form-control']) !!}
                        @includeWhen(count($errors->get('direccion'))>0, 'errors.message', ['errores' =>
                        $errors->get('direccion')])
                    </div>

                </div>







            </div>
        </div>

    </div>
</div>

@endsection