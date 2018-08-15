@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Crear Municipio</h1>
                    {!! Form::open(['method' => 'POST', 'route' => 'municipality.store']) !!}   
                     <div class="row">
                        <div class="col-md-12">
                            <select id="municipality_id" name="municipality_id" class="form-control">
                                <option value="0">Seleccione un Departamento</option>
                                @forelse ($departaments as $d)
                                <option value="{{ $d->id }}">{{ $d->description }}</option>
                                @empty
                                <option value="0">No existen registros</option>
                                @endforelse
                            </select>   
                        </div>
                        <div class="col-md-12">
                        <input id="description" name="description" type="text" class="form-control" placeholder="Nombre del Muniipio">
                        </div>
                        <div class="col-md-12">
                        <input id="short_name" name="short_name" type="text" class="form-control" placeholder="Nombre Corto">
                        </div>
                        {!! Form::submit('Crear Municipio', ['id' => 'btn_municipality','class' => 'btn btn-success btn-block']) !!}
                    </div>    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection