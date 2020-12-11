@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        {!! Form::open(['route' => 'comentario.store']) !!}
        @include('valoracion.comentarios.fieldsComentarios')
        {!! Form::submit('Guardar') !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection