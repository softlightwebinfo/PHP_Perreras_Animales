$("#form-save-biografia").on("submit", function (e) {
    e.preventDefault();

    var
        elem = $(this),
        biografia = elem.find("[name='biografia']"),
        template = '<div class="Alert"></div>';

    template = $(template);
    elem.find(">.Alert").remove();
    $.ajax({
        url: siteUrl('usuario/save-biografia/'),
        type: 'POST',
        dataType: 'json',
        data: {
            biografia: biografia.val().trim()
        },
        success: (data) => {
            if (data.success) {
                template.append("Se ha guardado la biografia correctamente");
                template.addClass('Alert--success');
                elem.prepend(template);
            } else {
                template.append("No se ha podido guardar la biografia");
                template.addClass('Alert--success');
                elem.prepend(template);
            }
        }
    });
});