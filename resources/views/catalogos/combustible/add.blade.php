@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::open(['route' => 'combustible.store']) !!}
    @include('catalogos.combustible.fieldCombustible')
    {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}
</div>
@endsection
