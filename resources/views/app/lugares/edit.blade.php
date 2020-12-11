@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Datos del Lugar</h4>
                <h6 class="card-subtitle text-muted"></h6>
            </div>
            
            <div class="card-body">
                {!! Form::model($model, ['route' => ['lugar.update', $model->id],'method'=>'patch']) !!}
                @include('app.lugares.fieldsLugares')
                {!! Form::submit('Actualizar') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
