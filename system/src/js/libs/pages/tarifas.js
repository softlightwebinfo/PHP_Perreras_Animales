$(document).on("submit", '#form-guardarTarifa', function (e) {
    e.preventDefault();
    var tarifas = [],
        tar = $(this).find("[name='precio']");

    tar.map((i, item) => {
        let tarifa = {
            nom: $(item).attr('data-tarifa'),
            id: $(item).attr('data-id'),
            precio: $(item).val()
        };
        tarifas.push(tarifa);
    });
    console.log(tarifas);
    // TODO: Revisar tarifas input
    $.ajax({
        url: siteUrl('api/saveTarifas/'),
        type: 'POST',
        dataType: 'json',
        async: true,
        data: {
            tarifas: tarifas
        },
        success: (data) => {
            console.log(data);
        }
    })
});