/**
 * Created by codeunic on 12/07/2017.
 */
export class Login {
    private _email;
    private _password;
    private _configCreateAccount = 'usuario/iniciarSession/';


    constructor(email, password) {
        this._email = email;
        this._password = password;
    }

    iniciarSession() {
        $.ajax({
            url: siteUrl(this._configCreateAccount),
            type: 'GET',
            dataType: 'json',
            data: {
                email: this._email,
                password: this._password
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