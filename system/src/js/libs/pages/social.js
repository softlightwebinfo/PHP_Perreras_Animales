$("#form-save-social").on("submit", function (e) {
    e.preventDefault();
    var
        elem = $(this),
        facebook = elem.find("[name='facebook']"),
        youtube = elem.find("[name='youtube']"),
        twitter = elem.find("[name='twitter']"),
        googlePlus = elem.find("[name='googlePlus']"),
        instagram = elem.find("[name='instagram']"),
        template = '<div class="Alert"></div>';

    template = $(template);

    elem.find(">.Alert").remove();
    $.ajax({
        url: siteUrl('usuario/save-social/'),
        type: 'POST',
        dataType: 'json',
        data: {
            facebook: facebook.val().trim(),
            twitter: twitter.val().trim(),
            youtube: youtube.val().trim(),
            googlePlus: googlePlus.val().trim(),
            instagram: instagram.val().trim()
        }, success: (data) => {
            if (data.success) {
                template.append('Se ha guardado correctamente');
                template.addClass("Alert--success");
                $(this).prepend(template);
            } else {
                template.append('No se ha podido guardar correctamente');
                template.addClass("Alert--danger");
                $(this).prepend(template);
            }
        }
    });
});