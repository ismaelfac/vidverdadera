@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Crear Localidad</h1>
                    {!! Form::open(['method' => 'POST', 'route' => 'location.store']) !!}   
                     <div class="row">
                        <div class="col-md-12">
                            <select id="municipality_id" name="municipality_id" class="form-control">
                                <option value="0">Seleccione un Municipio</option>
                                @forelse ($municipalities as $m)
                                <option value="{{ $m->id }}">{{ $m->description }}</option>
                                @empty
                                <option value="0">No existen registros</option>
                                @endforelse
                            </select>   
                        </div>
                        <div class="col-md-12">
                        <input id="description" name="description" type="text" class="form-control" placeholder="Nombre de la localidad">
                        </div>
                        <div class="col-md-12">
                        <input id="short_name" name="short_name" type="text" class="form-control" placeholder="Nombre Corto">
                        </div>
                        {!! Form::submit('Crear Localidad', ['id' => 'btn_location','class' => 'btn btn-success btn-block']) !!}
                    </div>    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection