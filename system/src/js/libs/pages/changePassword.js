import {
    error
} from '../../../config/idioma/idioma.json';

$("#form-change-password").on("submit", function (e) {
    e.preventDefault();
    var
        elem = $(this),
        passwordOld = elem.find("[name='password-old']"),
        passwordNew = elem.find("[name='password-new']"),
        errores = 0,
        template = '<div class="Alert"></div>';
    elem.find('>.Alert').remove();

    template = $(template);

    if (passwordNew.val().trim().length < 4) {
        template.append(error.contrasenaAntiguaMenor4['es'] + "<br/>");
        errores++;
    }
    if (passwordNew.val().trim().length < 4) {
        template.append(error.contrasenaNuevaMenor4['es'] + "<br/>");
        errores++;
    }
    if (passwordOld.val().trim() == passwordNew.val().trim()) {
        template.append(error.contrasenaIgual['es'] + "<br/>");
        errores++;
    }

    if (!errores) {
        $.ajax({
            url: siteUrl('usuario/changePassword/'),
            type: 'GET',
            dataType: 'json',
            data: {
                passwordNew: passwordNew.val().trim(),
                passwordOld: passwordOld.val().trim()
            },
            success: (data) => {
                if (data.noIgual) {
                    template.append(error.contrasenaNoIgualAntigua['es']);
                    template.addClass('Alert--danger');
                    elem.prepend(template);
                } else {
                    window.location.reload();
                }
            }
        });
    } else {
        template.addClass('Alert--danger');
        elem.prepend(template);
    }
});