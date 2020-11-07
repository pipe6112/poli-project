@extends("layouts.app")

@section("body") 
    <div class="card">
        <div class="card-header">
            <strong>Productos</strong>
            <a href="/producto/crear" class="btn btn-link">Crear</a>
            <a href="/pdfProductos" target="_blank" class="btn btn-sm btn-success">Imprimir PDF Productos</a>
        </div>
        <div class="card-body">
            @include('flash::message')
            <table id="tbl_producto" class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Fecha creación</th>
                        <th>Estado</th>
                        <th>Editar</th>
                        <th>Cambiar Estado</th>
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
           $('#tbl_producto').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/producto/listar',
        columns: [{
                data: 'nombre_producto', 
                name: 'nombre_producto'
            },
            {
                data: 'imagen', 
                name: 'imagen',
                orderable: false,
                searchable: false
            },
            {
                data: 'nombre_categoria', 
                name: 'nombre_categoria'
            },
            {
                data: 'precio', 
                name: 'precio'
            },
            {
                data: 'cantidad', 
                name: 'cantidad'
            },
            {
                data: 'created_at', 
                name: 'created_at'
            },
            {
                data: 'estado', 
                name: 'estado'
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