$(document).on("click", ".ALateral__aceptar", function (e) {
    e.preventDefault();

    var referencia = $(this).attr('data-code');

    $.ajax({
        url: siteUrl('codeunic/anuncios/aceptar-anuncio'),
        type: 'post',
        dataType: 'json',
        data: {
            referencia: referencia
        },
        success: (data) => {
            if (data.response) {
                $(this).parents('.ALateral__container').remove();
            }
        }
    });
});

$(document).on("click", ".ALateral__rechazar", function (e) {
    e.preventDefault();

    var referencia = $(this).attr('data-code');

    $.ajax({
        url: siteUrl('codeunic/anuncios/rechazar-anuncio'),
        type: 'post',
        dataType: 'json',
        data: {
            referencia: referencia
        },
        success: (data) => {
            if (data.response) {
                $(this).parents('.ALateral__container').remove();
            }
        }
    });
});