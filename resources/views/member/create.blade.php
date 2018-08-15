@extends('welcome')

@section('content')
  <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrar Miembro</div>
                    <div class="panel-body">
                        {!! Form::open(['method' => 'POST', 'route' => 'member.store']) !!}
                            {!! Field::text('first_name', ['label' => 'Nombres']) !!}
                            {!! Field::text('last_name', ['label' => 'Nombres']) !!}
                            {!! Field::select('type_dni', 'Seleccione una opción') !!}
                            {!! Field::text('dni', ['label' => 'Nombres']) !!}
                            {!! Field::text('phone', ['label' => 'Nombres']) !!}
                            {!! Field::text('landline', ['label' => 'Nombres']) !!}
                            {!! Field::text('email', ['label' => 'Nombres']) !!}
                            {!! Field::text('address', ['label' => 'Nombres']) !!}
                            {!! Field::select('country_id'), 'Seleccione una opción' !!}
                            {!! Field::select('departament_id'), 'Seleccione una opción' !!}
                            {!! Field::select('municipality_id'), 'Seleccione una opción' !!}
                            {!! Field::select('neighborhood_id'), 'Seleccione una opción' !!}
                            {!! Field::date('birthdate', ['label' => 'Nombres']) !!}
                            {!! Field::date('wedding_anniversary', ['label' => 'Nombres']) !!}
                            {!! Field::select('civilStatus_id'), 'Seleccione una opción' !!}
                            {!! Field::checkbox('is_leaders') !!}
                            {!! Field::select('church_id'), 'Seleccione una opción' !!}
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        crear miembro
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
