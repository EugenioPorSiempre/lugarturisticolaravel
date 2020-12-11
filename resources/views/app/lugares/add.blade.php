@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="card border-primary">
            <div class="card-body">
                <h4 class="card-title">Datos del lugar</h4>
                <p class="card-text">

                    {!! Form::open(['route' => 'lugar.store']) !!}
                    @include('app.lugares.fieldsLugares')
                    {!! Form::submit('Guardar',$attributes=['class' => 'btn btn-danger d-block mx-auto']) !!}
                    {!! Form::close() !!}
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
