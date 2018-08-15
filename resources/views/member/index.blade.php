@extends('welcome')

@section('content')
<div class="container">
        <div class="panel-body">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Miembros Vid Verdadera</h3>
                    <div class="btn-group pull-right" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary"><a href="{{ url('member/create') }}">Crear</a></button>
                        <button type="button" class="btn btn-secondary">Desactivar</button>
                        <button type="button" class="btn btn-secondary">Imprimir</button>
                    </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>Miembro</th>
                            <th>TIpo Dni</th>
                            <th>Dni</th>
                            <th>Dirección</th>
                            <th>Telefono Fijo</th>
                            <th>Dirección</th>
                            <th>Barrio</th>
                            <th>Localidad</th>
                            <th>Municipio</th>
                            <th>Departamento</th>
                            <th>Pais</th>
                            <th>FechaNac</th>
                            <th>Estado Civil</th>
                            <th>Fecha Bautismo</th>
                            <th>Fecha Ingreso</th>
                            <th>Fecha Aniversario</th>
                            <th>Es Lider</th>
                            <th>Iglesia</th>
                            <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($members as $m)
                            <tr>
                                <td>{{ $m->last_name }} {{ $m->first_name }}</td>
                                <td>{{ $m->type_dni }}</td>
                                <td>{{ $m->dni }}</td>
                                <td>{{ $m->phone }} </td>
                                <td>{{ $m->landline }}</td>
                                <td>{{ $m->address }}</td>
                                <td>{{ $m->neighborhood_id }}</td>
                                <td>{{ $m->location_id }}</td>
                                <td>{{ $m->municipality_id }}</td>
                                <td>{{ $m->departament_id }}</td>
                                <td>{{ $m->country_id }}</td>
                                <td>{{ $m->birthdate }}</td>
                                <td>{{ $m->civilstatus_id }}</td>
                                <td>{{ $m->date_baptism }}</td>
                                <td>{{ $m->admission_church }}</td>
                                <td>{{ $m->wedding_anniversary }}</td>
                                <td>{{ $m->active }}</td>
                                <td>{{ $m->is_leader }}</td>
                                <td>{{ $m->church_id }}</td>
                            </tr>
                            @empty
                                <li>No existen registros</li>
                            @endforelse
                        </tbody>
                    </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>      
        </div>
</div>
@endsection