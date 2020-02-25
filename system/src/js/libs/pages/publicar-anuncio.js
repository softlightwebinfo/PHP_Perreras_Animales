/**
 * Created by shelk on 23/07/2017.
 */
$("#form_anuncio input:file").on("change", function (e) {
    var elem = $(this),
        files = elem[0].files;
    // console.log(files);
    //Obtenemos la imagen del campo "file".
    for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imagenes.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        reader.onload = (function (file) {
            return function (e) {
                var filediv = $("#form_campo__preview");
                filediv.html(`<img style="width: 100%;height: auto;" src="${e.target.result}"/>`);
            };
        })(f);

        reader.readAsDataURL(f);
    }
});
$(document).on("submit", "#form_anuncio", function (e) {
    e.preventDefault();

    var petname = $(this).find("[name='nombre']"),
        tipo = $(this).find("[name='tipo']"),
        raza = $(this).find("[name='raza']"),
        estado = $(this).find("[name='estado']"),
        direccion = $(this).find("[name='direccionAbandonado']"),
        descripcion = $(this).find("[name='descripcion']"),
        errores = 0,
        filediv = $("#form_campo__preview"),
        img = $(this).find("[name='img']");

    if (petname.val() == '') {
        errores++;
    }
    if (tipo.val() == -1) {
        errores++;
    }
    if (raza.val() == '-1') {
        errores++;
    }
    if (estado.val() == '-1') {
        errores++;
    }

    if (estado.val() == 'Abandonado' && direccion.val() == '') {
        errores++;
    }

    if (!errores) {
        $.ajax({
            url: siteUrl('anuncios/crear-anuncio'),
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            data: new FormData(this),
            cache: false,
            success: (data) => {
                if (data.success == true) {
                    alert('se ha enviado la solicitud para publicar un anuncio correctamente');
                    $(this)[0].reset();
                    filediv.html('');
                } else {
                    alert("Error");
                }
            }
        });
    } else {
        console.log(errores);
    }
});
