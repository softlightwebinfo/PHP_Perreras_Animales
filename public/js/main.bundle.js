/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(1);

__webpack_require__(3);

__webpack_require__(5);

__webpack_require__(6);

__webpack_require__(7);

__webpack_require__(8);

__webpack_require__(9);

__webpack_require__(11);

__webpack_require__(12);

__webpack_require__(13);

__webpack_require__(14);

__webpack_require__(15);

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _Login = __webpack_require__(2);

$(document).on("submit", "#form-login", function (e) {
    e.preventDefault();
    var email = $(this).find("[name='email']"),
        password = $(this).find("[name='password']"),
        error = 0,
        login = new _Login.Login(email.val().trim(), password.val().trim());

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

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", { value: true });
/**
 * Created by codeunic on 12/07/2017.
 */
var Login = function () {
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
            success: function success(data) {
                if (data.success) {
                    window.location.reload();
                } else {
                    alert(data.errorMessage);
                }
            }
        });
    };
    return Login;
}();
exports.Login = Login;

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _Registro = __webpack_require__(4);

$(document).on("submit", "#form-registro", function (e) {
    e.preventDefault();

    var usuario = $(this).find("[name='username']"),
        email = $(this).find("[name='email']"),
        password = $(this).find("[name='password']"),
        repetirPassword = $(this).find("[name='repetirPassword']"),
        errores = 0;

    var registro = new _Registro.Registro(usuario.val().trim(), email.val().trim(), password.val().trim(), repetirPassword.val().trim());

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

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", { value: true });
var Registro = function () {
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
            success: function success(data) {
                if (data.success) {
                    window.location.reload();
                } else {
                    alert(data.errorMessage);
                }
            }
        });
    };
    return Registro;
}();
exports.Registro = Registro;

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).on("submit", "#form-contacto", function (e) {
    e.preventDefault();
    var nombre = $(this).find("[name='name']"),
        provincia = $(this).find("[name='provincia']"),
        municipio = $(this).find("[name='municipio']"),
        mensaje = $(this).find("[name='mensaje']"),
        email = $(this).find("[name='email']");

    $.ajax({
        url: siteUrl('api/send-contacto/'),
        type: 'POST',
        dataType: 'json',
        data: {
            nombre: nombre.val(),
            provincia: provincia.val(),
            municipio: municipio.val(),
            mensaje: mensaje.val(),
            email: email.val()
        },
        success: function success(data) {
            alert('se ha enviado el mensaje correctamente, Gracias por enviarnos el comentario, te contestaremos lo mas rapido posible.');
        }
    });
});

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).on("change", "#provincias", function (e) {
    var valor = $(this).val(),
        municipio = $("#municipios");
    $.ajax({
        url: siteUrl("api/municipios/"),
        type: 'GET',
        dataType: 'json',
        data: {
            provincia: valor
        },
        success: function success(data) {
            municipio.html('');
            var template = "<option value=\"-1\">Selecciona un municipio</option>";
            data.response.map(function (obj, index) {
                template += "<option value=" + obj.id + ">" + obj.municipio + "</option>";
            });
            municipio.append(template);
        }
    });
});

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * Created by shelk on 22/07/2017.
 */
$(document).on("change", "#tipos", function (e) {
    var valor = $(this).val();
    var raza = $('#razas');
    $.ajax({
        url: siteUrl("api/razas/"),
        type: 'GET',
        dataType: 'json',
        data: {
            tipo: valor
        },
        beforeSend: function beforeSend() {
            // poner el select disable mientras está cargando
            var template = "<option value=\"-1\">Cargando razas...</option>";
            raza.html(template);
        },
        success: function success(data) {
            raza.html('');
            var template = "<option value=\"-1\">Selecciona una raza</option>";
            data.response.map(function (obj, index) {
                template += "<option value=\"" + obj.raza + "\">" + obj.raza + "</option>";
            });
            raza.html(template);
        }
    });
});

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * Created by shelk on 22/07/2017.
 */

$(document).on("change", "#estados", function (e) {
    if ($(this).val() == 'Abandonado') {
        $('#estadoAbandonado').append("<input type=\"text\" class=\"Form__control\" id=\"direccionAbandonados\" name=\"direccionAbandonado\" placeholder=\"Introduzca la direcci\xF3n donde ha encontrado el animal\">");
    } else {
        $('#estadoAbandonado').find('#direccionAbandonados').remove();
    }
});

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _idioma = __webpack_require__(10);

$("#form-change-password").on("submit", function (e) {
    e.preventDefault();
    var elem = $(this),
        passwordOld = elem.find("[name='password-old']"),
        passwordNew = elem.find("[name='password-new']"),
        errores = 0,
        template = '<div class="Alert"></div>';
    elem.find('>.Alert').remove();

    template = $(template);

    if (passwordNew.val().trim().length < 4) {
        template.append(_idioma.error.contrasenaAntiguaMenor4['es'] + "<br/>");
        errores++;
    }
    if (passwordNew.val().trim().length < 4) {
        template.append(_idioma.error.contrasenaNuevaMenor4['es'] + "<br/>");
        errores++;
    }
    if (passwordOld.val().trim() == passwordNew.val().trim()) {
        template.append(_idioma.error.contrasenaIgual['es'] + "<br/>");
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
            success: function success(data) {
                if (data.noIgual) {
                    template.append(_idioma.error.contrasenaNoIgualAntigua['es']);
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

/***/ }),
/* 10 */
/***/ (function(module, exports) {

module.exports = {"error":{"contrasenaIgual":{"es":"La contraseña antigua no puede ser igual a la contraseña actual"},"contrasenaAntiguaMenor4":{"es":"La contraseña Antigua no puede ser menor a 4"},"contrasenaNuevaMenor4":{"es":"La contraseña nueva no puede ser menor a 4"},"contrasenaNoIgualAntigua":{"es":"La contraseña Antigua no es la misma que la que tienes actualmente"}}}

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$("#form-save-social").on("submit", function (e) {
    var _this = this;

    e.preventDefault();
    var elem = $(this),
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
        }, success: function success(data) {
            if (data.success) {
                template.append('Se ha guardado correctamente');
                template.addClass("Alert--success");
                $(_this).prepend(template);
            } else {
                template.append('No se ha podido guardar correctamente');
                template.addClass("Alert--danger");
                $(_this).prepend(template);
            }
        }
    });
});

/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$("#form-save-biografia").on("submit", function (e) {
    e.preventDefault();

    var elem = $(this),
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
        success: function success(data) {
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

/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * Created by shelk on 23/07/2017.
 */
$("#form_anuncio input:file").on("change", function (e) {
    var elem = $(this),
        files = elem[0].files;
    // console.log(files);
    //Obtenemos la imagen del campo "file".
    for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imagenes.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        reader.onload = function (file) {
            return function (e) {
                var filediv = $("#form_campo__preview");
                filediv.html("<img style=\"width: 100%;height: auto;\" src=\"" + e.target.result + "\"/>");
            };
        }(f);

        reader.readAsDataURL(f);
    }
});
$(document).on("submit", "#form_anuncio", function (e) {
    var _this = this;

    e.preventDefault();

    var petname = $(this).find("[name='nombre']"),
        tipo = $(this).find("[name='tipo']"),
        raza = $(this).find("[name='raza']"),
        estado = $(this).find("[name='estado']"),
        direccion = $(this).find("[name='direccionAbandonado']"),
        descripcion = $(this).find("[name='descripcion']"),
        errores = 0,
        filediv = $("#form_campo__preview"),
        img = $(this).find("[name='img']");

    if (petname.val() == '') {
        errores++;
    }
    if (tipo.val() == -1) {
        errores++;
    }
    if (raza.val() == '-1') {
        errores++;
    }
    if (estado.val() == '-1') {
        errores++;
    }

    if (estado.val() == 'Abandonado' && direccion.val() == '') {
        errores++;
    }

    if (!errores) {
        $.ajax({
            url: siteUrl('anuncios/crear-anuncio'),
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            data: new FormData(this),
            cache: false,
            success: function success(data) {
                if (data.success == true) {
                    alert('se ha enviado la solicitud para publicar un anuncio correctamente');
                    $(_this)[0].reset();
                    filediv.html('');
                } else {
                    alert("Error");
                }
            }
        });
    } else {
        console.log(errores);
    }
});

/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).on("submit", '#form-guardarTarifa', function (e) {
    e.preventDefault();
    var tarifas = [],
        tar = $(this).find("[name='precio']");

    tar.map(function (i, item) {
        var tarifa = {
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
        success: function success(data) {
            console.log(data);
        }
    });
});

/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).on("click", ".ALateral__aceptar", function (e) {
    var _this = this;

    e.preventDefault();

    var referencia = $(this).attr('data-code');

    $.ajax({
        url: siteUrl('codeunic/anuncios/aceptar-anuncio'),
        type: 'post',
        dataType: 'json',
        data: {
            referencia: referencia
        },
        success: function success(data) {
            if (data.response) {
                $(_this).parents('.ALateral__container').remove();
            }
        }
    });
});

$(document).on("click", ".ALateral__rechazar", function (e) {
    var _this2 = this;

    e.preventDefault();

    var referencia = $(this).attr('data-code');

    $.ajax({
        url: siteUrl('codeunic/anuncios/rechazar-anuncio'),
        type: 'post',
        dataType: 'json',
        data: {
            referencia: referencia
        },
        success: function success(data) {
            if (data.response) {
                $(_this2).parents('.ALateral__container').remove();
            }
        }
    });
});

/***/ })
/******/ ]);
//# sourceMappingURL=main.bundle.js.map