@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Localidades</h1>
                </div>
                <div class="col-md-12">
                    {!! Form::open() !!}
                        {!! Field::select('municipality', null, $municipalities, [$options]) !!}
                    {!! Form::close() !!}
                </div>
                <div class="panel-body">
                    <ul>
                    @foreach ($locations as $location )
                            <li>
                                <a href="{{ $location->url }}">{{ $location->description }} : <strong>{{ $location->short_name }}</strong></a>
                            </li>
                            @endforeach
                    </ul>
                </div>
                {{ $locations->render()}}
            </div>
        </div>
    </div>
</div>
@endsection