<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO DE CONTACTO</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Formulario de Contacto</h2>

    <div id="alerta"></div>

    <form id="formContacto">
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" id="nombre" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" id="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Mensaje</label>
            <textarea id="mensaje" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="/registros" class="btn btn-secondary">Ver Registros</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$('#formContacto').submit(function(e){
    e.preventDefault();

    let nombre = $('#nombre').val();
    let email = $('#email').val();
    let mensaje = $('#mensaje').val();

    // Validación JS verificar error que me sale (pendiente)
    if(nombre === '' || email === '' || mensaje === ''){
        $('#alerta').html('<div class="alert alert-danger">Todos los campos son obligatorios</div>');
        return;
    }

    $.ajax({
        url: '/guardar-mensaje',
        type: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            nombre: nombre,
            email: email,
            mensaje: mensaje
        },
        success: function(response){
            $('#alerta').html('<div class="alert alert-success">Mensaje guardado correctamente</div>');
            $('#formContacto')[0].reset();
        }
    });
});
</script>
</body>
</html>