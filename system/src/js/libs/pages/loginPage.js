import {Login} from '../class/Login';

$(document).on("submit", "#form-login", function (e) {
    e.preventDefault();
    var email = $(this).find("[name='email']"),
        password = $(this).find("[name='password']"),
        error = 0,
        login = new Login(email.val().trim(), password.val().trim());


    if (email == '') {
        error++;
    }
    if (password == '') {
        error++;
    }
    if (!error) {
        login.iniciarSession();
    }

});