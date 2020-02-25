export class Registro {
    private _username: string;
    private _email: string;
    private _password: string;
    private _repeatPassword: string;
    private _configCreateAccount = 'usuario/crearCuenta/';

    constructor(username: string, email: string, password: string, repeatPassword: string) {
        this._username = username;
        this._email = email;
        this._password = password;
        this._repeatPassword = repeatPassword;
    }

    crearCuenta() {
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
            success: (data) => {
                if (data.success) {
                    window.location.reload();
                } else {
                    alert(data.errorMessage);
                }
            }
        });
    }
}
