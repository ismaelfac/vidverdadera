@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <h1>{{ $municipality->description }}</h1>
    </div>
    <div class="col-md-8">
        <h4>Comentarios</h4>
        {!! Form::open(['route' => ['location.store', $municipality], 'method' => 'POST']) !!}               
         <div class="row">
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
    <div class="col-md-4">
        <h4>Comentarios del Post</h4>
        <ul class="list-group">
            @forelse ($locations as $l)
                <li class="list-group-item">
                <button class="btn btn-default btn-block" value="{{ $l->id }}">{{ $l->description }} : <strong>{{ $l->short_name }}</strong></button>
                </li>
            @empty
                <li>No existen registros</li>
            @endforelse
        </ul>            
        {{ $locations->render() }}
    </div>
    </div>
</div>
    
    
@endsection