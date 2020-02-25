$(document).on("submit", "#form-contacto", function (e) {
    e.preventDefault();
    let nombre = $(this).find("[name='name']"),
        provincia = $(this).find("[name='provincia']"),
        municipio = $(this).find("[name='municipio']"),
        mensaje = $(this).find("[name='mensaje']"),
        email = $(this).find("[name='email']")

    $.ajax({
        url: siteUrl('api/send-contacto/'),
        type: 'POST',
        dataType: 'json',
        data: {
            nombre: nombre.val(),
            provincia: provincia.val(),
            municipio: municipio.val(),
            mensaje: mensaje.val(),
            email: email.val()
        },
        success: (data) => {
            alert('se ha enviado el mensaje correctamente, Gracias por enviarnos el comentario, te contestaremos lo mas rapido posible.');
        }
    });


});