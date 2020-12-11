@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        {!! Form::model($model, ['route' => ['calificacion.update', $model->id],'method'=>'patch'])
        !!}

        @include('valoracion.calificaciones.fieldsCalificaciones')

        <button type="submit" class="btn btn-success">
            Actualizar
        </button>

        {!! Form::close() !!}

    </div>
</div>
@endsection