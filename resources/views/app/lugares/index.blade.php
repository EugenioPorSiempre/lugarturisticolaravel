@extends('layouts.app')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12">
            <a href="{!! route('lugar.add') !!}" class="btn btn-link">
                <i class="fas fa-plus-circle    "></i> Agregar
            </a>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead class="thead-dark">
                        <tr role="rowheader">
                            <th width="100">ID
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Direccion</th>
                            <th></th>
                            <th width="100"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lugares as $row)
                        <tr role="row">
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->nombre }} </td>
                            <td>{{ $row->tipo->nombre }} </td>
                            <td>{{ $row->direccion }} </td>
                            <td>
                                <a href="{!! route('detalleLugar') !!}" class="btn btn-link">
                                    <i class="fas fa-plus-circle    "></i> Valoracion
                                </a>
                            </td>


                            <td>

                                <div class="btn-group">
                                    <a href="{!! route('lugar.edit',$row->id) !!}" class="btn btn-link">
                                        <i class="fas fa-edit    "></i>
                                    </a>

                                    {!! Form::open(['route' => ['lugar.delete',$row->id],'method'=>'delete']) !!}
                                    <button type="submit" class="btn btn-link text-red">
                                        <i class="fas fa-trash    "></i>
                                    </button>
                                    {!! Form::close() !!}
                                </div>




                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection