@extends('layouts.app')

@section('content')
<div class="jumbotron">
    {!! Form::open(['route' => 'listas']) !!}

    <div class="form-group">
        <label for="exampleInputEmail1">Color</label>
        <select-combustibles 
        url="/api-app/colores" 
        nombre="color_id" 
        label="color" />
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Sexo</label>
        <select-combustibles 
        url="/api-app/sexos" 
        nombre="sexo_id" 
        label="sexo_full" />
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Sexo</label>
        <select-combustibles 
        url="/api-app/cooperativas" 
        nombre="cooperativa_id" 
        label="cooperativa" />
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">BArrios</label>
        <select-combustibles 
        url="/api-app/barrios" 
        nombre="barrio_id" 
        label="barrio" />
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">BArrios</label>
        <select-lugar
        url="/api-app/tipos" 
        nombre="tipo_id" 
        label="nombre" />
    </div>


    {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}

</div>
@endsection
