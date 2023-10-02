<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center;">Registros de Citas</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table" id="Registos_Citas">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre y Apellido</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Especialidad</th>
                            <th>Turno</th>
                            <th>Fecha y Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mensajes as $mensaje)
                        <tr>
                            <td>{{ $mensaje->id }}</td>
                            <td>{{ $mensaje->nombre_apellido }}</td>
                            <td>{{ $mensaje->correo }}</td>
                            <td>{{ $mensaje->telefono }}</td>
                            <td>{{ $mensaje->especialidad }}</td>
                            <td>{{ $mensaje->turno }}</td>
                            <td>{{ $mensaje->fecha_hora }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
    <script>
        function exportTableToExcel(tableID, filename = 'Registos_Citas') {
            var wb = XLSX.utils.book_new();
            var ws = XLSX.utils.table_to_sheet(document.getElementById(tableID));
            XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
            XLSX.writeFile(wb, filename ? filename + '.xlsx' : 'excel_data.xlsx');
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ url('../admin') }}" class="btn btn-warning">Volver atras</a>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-success" onclick="exportTableToExcel('Registos_Citas')">Descargar Excel</button>
            </div>
        </div>
    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>