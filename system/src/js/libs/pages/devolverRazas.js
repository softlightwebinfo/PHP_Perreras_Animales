/**
 * Created by shelk on 22/07/2017.
 */
$(document).on("change", "#tipos", function (e) {
    var valor = $(this).val();
    var raza = $('#razas');
    $.ajax({
        url: siteUrl("api/razas/"),
        type: 'GET',
        dataType: 'json',
        data: {
            tipo: valor
        },
        beforeSend: function () {
            // poner el select disable mientras está cargando
            var template = `<option value="-1">Cargando razas...</option>`;
            raza.html(template);
        },
        success: (data) => {
            raza.html('');
            var template = `<option value="-1">Selecciona una raza</option>`;
            data.response.map((obj, index) => {
                template += `<option value="${obj.raza}">${obj.raza}</option>`;
            });
            raza.html(template);
        }
    });
});
