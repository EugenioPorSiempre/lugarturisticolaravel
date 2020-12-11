@extends('layouts.app')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12">
            <a href="{!! route('calificacion.add') !!}" class="btn btn-link">
                <i class="fas fa-plus-circle  "></i> Agregar
            </a>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead class="thead-dark">
                        <tr role="rowheader">
                            <th width="100">ID
                            <th>Calificacion</th>
                            <th></th>                         
                            <th width="100"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                        <tr role="row">
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->calificacion }} </td>
                            <td></td>


                            <td>

                                <div class="btn-group">
                                    <a href="{!! route('calificacion.edit',$row->id) !!}" class="btn btn-link">
                                        <i class="fas fa-edit    "></i>
                                    </a>

                                    {!! Form::open(['route' => ['calificacion.delete',$row->id],'method'=>'delete']) !!}
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