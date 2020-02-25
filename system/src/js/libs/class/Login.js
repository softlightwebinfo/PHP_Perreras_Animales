"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
/**
 * Created by codeunic on 12/07/2017.
 */
var Login = (function () {
    function Login(email, password) {
        this._configCreateAccount = 'usuario/iniciarSession/';
        this._email = email;
        this._password = password;
    }
    Login.prototype.iniciarSession = function () {
        $.ajax({
            url: siteUrl(this._configCreateAccount),
            type: 'GET',
            dataType: 'json',
            data: {
                email: this._email,
                password: this._password
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
    return Login;
}());
exports.Login = Login;
