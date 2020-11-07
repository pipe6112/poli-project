@extends("layouts.app")

@section("body") 
    <div class="card">
        <div class="card-header">
            <strong>Productos</strong>
            <a href="/agenda/crear" class="btn btn-link">Crear</a>
        </div>
        <div class="card-body">
            @include('flash::message')
            <table id="tbl_agenda" class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora de inicio</th>
                        <th>Hora final</th>
                        <th>Persona</th>
                        <th>Editar</th>
                        <th>Estado Agenda</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>


@endsection

@section("scripts")
   <script>
           $('#tbl_agenda').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/agenda/listar',
        columns: [{
                data: 'fecha', 
                name: 'fecha'
            },
            {
                data: 'hora_inicio', 
                name: 'hora_inicio'
            },
            {
                data: 'hora_final', 
                name: 'hora_final'
            },
            {
                data: 'nombre_persona', 
                name: 'nombre_persona'
            },
            {
                data: 'editar',
                name: 'editar', 
                orderable: false,
                searchable: false
            },
            {
                data: 'cambiar',
                name: 'cambiar', 
                orderable: false,
                searchable: false
            }

        ]
    });
   </script> 
@endsection