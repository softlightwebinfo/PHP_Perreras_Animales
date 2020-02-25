$(document).on("change", "#provincias", function (e) {
    var valor = $(this).val(),
        municipio = $("#municipios");
    $.ajax({
        url: siteUrl(`api/municipios/`),
        type: 'GET',
        dataType: 'json',
        data: {
            provincia: valor
        },
        success: (data) => {
            municipio.html('');
            var template = `<option value="-1">Selecciona un municipio</option>`;
            data.response.map((obj, index) => {
                template += `<option value=${obj.id}>${obj.municipio}</option>`;
            });
            municipio.append(template);
        }
    });
});