@extends('layouts.app')
@section('content')
    <div class="container">
        {!! Form::model($model,['route' => ['combustible.update',$model->id],'method'=>'patch']) !!}
        @include('catalogos.combustible.fieldCombustible')
        {!! Form::submit('Actualizar') !!}
        {!! Form::close() !!}
    </div>
@endsection
