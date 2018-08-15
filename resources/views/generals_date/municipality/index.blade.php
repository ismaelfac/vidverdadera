@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="btn-group pull-right" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary"><a href="{{ url('location/create') }}">Crear</a></button>
                        <button type="button" class="btn btn-secondary">Desactivar</button>
                        <button type="button" class="btn btn-secondary">Imprimir</button>
                    </div>
                    <h1>Municipios</h1>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                    @forelse ($municipalities as $m)
                        <li class="list-group-item">
                            <a  type="button" class="btn btn-default btn-block" href="{{ $m->id }}">{{ $m->description }}</a>
                        </li>
                    @empty
                        <li>No existen registros</li>
                    @endforelse
                    </ul>
                </div>
                {{ $municipalities->render() }}
            </div>
        </div>
    </div>
</div>
@endsection