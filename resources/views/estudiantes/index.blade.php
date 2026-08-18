
@extends('layouts.admin')

@section('title', 'Estudiantes')

@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Listado de Estudiantes</h3>
            </div>

            <div class="card-body">

                <table id="tablaEstudiantes" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Carrera</th>
                        </tr>
                    </thead>

                    <tbody>
                         @foreach($estudiantes as $estudiante)
                         <tr>
                            <td>{{ $estudiante->id }}</td>
                            <td>{{ $estudiante->nombre }}</td>
                            <td>{{ $estudiante->apellido }}</td>
                            <td>{{ $estudiante->email }}</td>
                            <td>{{ $estudiante->carrera->nombre }}</td>
                        </tr>
                     @endforeach
                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#tablaEstudiantes').DataTable();
    });
</script>
@endpush



