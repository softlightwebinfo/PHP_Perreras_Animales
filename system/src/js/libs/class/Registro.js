"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var Registro = (function () {
    function Registro(username, email, password, repeatPassword) {
        this._configCreateAccount = 'usuario/crearCuenta/';
        this._username = username;
        this._email = email;
        this._password = password;
        this._repeatPassword = repeatPassword;
    }
    Registro.prototype.crearCuenta = function () {
        $.ajax({
            url: siteUrl(this._configCreateAccount),
            type: 'post',
            dataType: 'json',
            data: {
                username: this._username,
                email: this._email,
                password: this._password,
                repeatPassword: this._password
            },
            success: function (data) {
                if (data.success) {
                    window.location.reload();
                }
                else {
                    alert(data.errorMessage);
                }
            }
        });
    };
    return Registro;
}());
exports.Registro = Registro;
