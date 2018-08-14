@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            {!! Form::open() !!}
                {!! Field::select('municipality', $list, $selected, [$options]) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-12">
            
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Area</th>
                        <th scope="col">Nombre Corto</th>
                        <th scope="col">municipio</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($locations as $location )
                        <tr>
                        <th scope="row">{{ $location->description }}</th>
                        <td>{{ $location->short_name }}</td>
                        <td>{{ $location->municipality_id}}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
</div>
    
    
@endsection