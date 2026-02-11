<!DOCTYPE html>
<html>
<head>
    <title>Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Mensajes Recibidos</h2>

    <a href="/" class="btn btn-primary mb-3">Volver</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mensajes as $mensaje)
                <tr>
                    <td>{{ $mensaje['nombre'] }}</td>
                    <td>{{ $mensaje['email'] }}</td>
                    <td>{{ $mensaje['mensaje'] }}</td>
                    <td>{{ $mensaje['fecha'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay mensajes registrados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
