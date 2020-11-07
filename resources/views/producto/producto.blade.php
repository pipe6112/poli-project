<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TABLA DE PRODUCTOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body {
            margin: 3cm 2cm 2cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #A3D6C6;
            color: white;
            text-align: center;
            line-height: 30px;
        }
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2785a1;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
    <header>
        <br>
        <p><strong>PRODUCTOS - PDF</strong></p>
    </header>
    <main>
        <div class="container">
            <h5 style="text-align: center"><strong>TABLA DE PRODUCTOS</strong></h5>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Creacion</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
               <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <th scope="row">{{ $producto->id }}</th>
                        <td>{{ $producto->imagen }}</td>
                        <td>{{ $producto->nombre_producto }}</td>
                        <td>{{ $producto->categoria_id }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>{{ $producto->created_at }}</td>
                        <td>{{ $producto->estado }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p><strong>PRODUCTOS - PDF</strong><a> © 2020 Camilo Acevedo.</a></p>
    </footer>

    <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(400, 570, "$PAGE_NUM", $font, 10);
            ');
        }
    </script>

</body>
</html>