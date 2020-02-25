/**
 * Created by shelk on 22/07/2017.
 */

$(document).on("change", "#estados", function (e) {
    if ($(this).val() == 'Abandonado') {
        $('#estadoAbandonado').append(`<input type="text" class="Form__control" id="direccionAbandonados" name="direccionAbandonado" placeholder="Introduzca la dirección donde ha encontrado el animal">`);
    } else {
        $('#estadoAbandonado').find('#direccionAbandonados').remove();
    }
});

