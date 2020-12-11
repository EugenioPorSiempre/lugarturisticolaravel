@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        {!! Form::open(['route' => 'calificacion.store']) !!}
        @include('valoracion.calificaciones.fieldsCalificaciones')
        {!! Form::submit('Guardar') !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection