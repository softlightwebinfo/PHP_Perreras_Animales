import {Registro} from '../class/Registro';
$(document).on("submit", "#form-registro", function (e) {
    e.preventDefault();

    var usuario = $(this).find("[name='username']"),
        email = $(this).find("[name='email']"),
        password = $(this).find("[name='password']"),
        repetirPassword = $(this).find("[name='repetirPassword']"),
        errores = 0;

    var registro = new Registro(usuario.val().trim(), email.val().trim(), password.val().trim(), repetirPassword.val().trim());

    if (registro._username == '') {
        errores++;
    }
    if (registro._email == '') {
        errores++;
    }
    if (registro._password == '') {
        errores++;
    }
    if (registro._repeatPassword == '') {
        errores++;
    }
    if (registro._password !== registro._repeatPassword) {
        errores++;
    }

    if (!errores) {
        registro.crearCuenta();
    } else {
        console.log(errores);
    }
});