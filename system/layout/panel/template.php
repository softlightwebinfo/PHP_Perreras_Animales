<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="<?= $this->meta_descripcion ?? ''; ?>">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $_layoutParams['ruta']; ?>plugins/images/logo-srp.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= $this->titulo; ?></title>
    <link rel="stylesheet" href="<?= src('codeunic.css', 'libs/codeunic/css/') ?>">
    <link rel="stylesheet" href="<?= $_layoutParams['ruta_css']; ?>style.css">
</head>
<body class="<?= $this->classWrapp ?? ''; ?>" style="<?= $this->styleWrapp ?? ''; ?>">
<div id="wrapper">
    <?php if (!isset($this->header) OR ($this->header == true)): ?>
        <header class="Header">
            <div class="Header__content">
                <div class="Header__item Header__search rd-hidden-sm-max">
                    <a href="<?= base_url(''); ?>">
                        <img src="<?= ruta_public('iconos/logo-noname.svg') ?>" class="Header__logo" alt="">
                    </a>
                    <div class="ComboBox">
                        <div class="ComboBox__search">
                            <svg class="ComboBox__icono" aria-hidden="true">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/symbols.svg#search') ?>"></use>
                            </svg>
                            <input tabindex="1" autofocus type="text" autocomplete="off" class="ComboBox__input" placeholder="Buscar anuncios"/>
                        </div>
                        <ul class="ComboBox-list ComboBox__list">
                            <li class="ComboBox-list__item">
                                <h3 class="ComboBox-list__title">Recent Items</h3>
                            </li>
                            <li class="ComboBox-list__item">
                                <div class="ComboBox-item">
                                    <svg class="ComboBox-item__figure">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/standard.svg#opportunity') ?>"></use>
                                    </svg>
                                    <div class="ComboBox-item__body">
                                        <span class="ComboBox-item__title">Salesforce - 1,000 Licenses</span>
                                        <span class="ComboBox-item__category">
                                        Opportunity • Prospecting
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li class="ComboBox-list__item">
                                <div class="ComboBox-item">
                                    <svg class="ComboBox-item__figure">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/standard.svg#opportunity') ?>"></use>
                                    </svg>
                                    <div class="ComboBox-item__body">
                                        <span class="ComboBox-item__title">Salesforce - 1,000 Licenses</span>
                                        <span class="ComboBox-item__category">
                                        Opportunity • Prospecting
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li class="ComboBox-list__item">
                                <div class="ComboBox-item">
                                    <svg class="ComboBox-item__figure">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/standard.svg#opportunity') ?>"></use>
                                    </svg>
                                    <div class="ComboBox-item__body">
                                        <span class="ComboBox-item__title">Salesforce - 1,000 Licenses</span>
                                        <span class="ComboBox-item__category">
                                        Opportunity • Prospecting
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li class="ComboBox-list__item">
                                <div class="ComboBox-item">
                                    <svg class="ComboBox-item__figure">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/standard.svg#opportunity') ?>"></use>
                                    </svg>
                                    <div class="ComboBox-item__body">
                                        <span class="ComboBox-item__title">Salesforce - 1,000 Licenses</span>
                                        <span class="ComboBox-item__category">
                                        Opportunity • Prospecting
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li class="ComboBox-list__item">
                                <div class="ComboBox-item">
                                    <svg class="ComboBox-item__figure">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/standard.svg#opportunity') ?>"></use>
                                    </svg>
                                    <div class="ComboBox-item__body">
                                        <span class="ComboBox-item__title">Salesforce - 1,000 Licenses</span>
                                        <span class="ComboBox-item__category">
                                        Opportunity • Prospecting
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li class="ComboBox-list__item">
                                <div class="ComboBox-item">
                                    <svg class="ComboBox-item__figure">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/standard.svg#opportunity') ?>"></use>
                                    </svg>
                                    <div class="ComboBox-item__body">
                                        <span class="ComboBox-item__title">Salesforce - 1,000 Licenses</span>
                                        <span class="ComboBox-item__category">
                                        Opportunity • Prospecting
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li class="ComboBox-list__item">
                                <div class="ComboBox-item">
                                    <svg class="ComboBox-item__figure">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/standard.svg#opportunity') ?>"></use>
                                    </svg>
                                    <div class="ComboBox-item__body">
                                        <span class="ComboBox-item__title">Salesforce - 1,000 Licenses</span>
                                        <span class="ComboBox-item__category">
                                        Opportunity • Prospecting
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li class="ComboBox-list__item">
                                <div class="ComboBox-item">
                                    <svg class="ComboBox-item__figure">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/standard.svg#opportunity') ?>"></use>
                                    </svg>
                                    <div class="ComboBox-item__body">
                                        <span class="ComboBox-item__title">Salesforce - 1,000 Licenses</span>
                                        <span class="ComboBox-item__category">
                                        Opportunity • Prospecting
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li class="ComboBox-list__item">
                                <div class="ComboBox-item">
                                    <svg class="ComboBox-item__figure">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/standard.svg#opportunity') ?>"></use>
                                    </svg>
                                    <div class="ComboBox-item__body">
                                        <span class="ComboBox-item__title">Salesforce - 1,000 Licenses</span>
                                        <span class="ComboBox-item__category">
                                        Opportunity • Prospecting
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li class="ComboBox-list__item">
                                <div class="ComboBox-item">
                                    <svg class="ComboBox-item__figure">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/standard.svg#opportunity') ?>"></use>
                                    </svg>
                                    <div class="ComboBox-item__body">
                                        <span class="ComboBox-item__title">Salesforce - 1,000 Licenses</span>
                                        <span class="ComboBox-item__category">
                                        Opportunity • Prospecting
                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li class="ComboBox-list__item">
                                <div class="ComboBox-item">
                                    <svg class="ComboBox-item__figure">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/standard.svg#opportunity') ?>"></use>
                                    </svg>
                                    <div class="ComboBox-item__body">
                                        <span class="ComboBox-item__title">Salesforce - 1,000 Licenses</span>
                                        <span class="ComboBox-item__category">
                                        Opportunity • Prospecting
                                    </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="Header__item List List--horizontal Header-list">
                    <?php if ($this->_acl->isRol('Administrador')): ?>
                        <li class="List__item rd-hidden-sm-max">
                            <a href="<?= base_url('codeunic/') ?>" class="Button Button--neutral">
                                Administración
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (!Session::accesoViewSimple()): ?>
                        <li class="List__item rd-hidden-sm-max">
                            <a href="<?= base_url('usuario/login/') ?>" class="Button Button--neutral">
                                Login
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (Session::accesoViewSimple()): ?>
                        <?php if (!$this->_acl->isRol('Administrador')): ?>
                            <li class="List__item rd-hidden-sm-max">
                                <a href="<?= base_url('panel/') ?>" class="Button Button--neutral">
                                    Panel de control
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <li class="List__item rd-hidden-sm-max">
                        <a href="<?= base_url('anuncios/') ?>" class="Button Button--neutral">
                            Listado de animales
                        </a>
                    </li>
                    <?php if (Session::accesoViewSimple()): ?>
                        <li class="List__item">
                            <button class="Button Button--icon">
                                <svg class="Button__icon Icon Icon--medium Icon--star">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/symbols.svg#favorite') ?>"></use>
                                </svg>
                            </button>
                        </li>
                        <li class="List__item">
                            <button class="Button Button--icon">
                                <svg class="Button__icon Icon Icon--medium">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/symbols.svg#question') ?>"></use>
                                </svg>
                            </button>
                        </li>
                        <li class="List__item">
                            <a href="<?= base_url('panel/configuracion/'); ?>" class="Button Button--icon">
                                <svg class="Button__icon Icon Icon--medium">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="<?= srcLib('codeunic', 'assets/icons/symbols.svg#setup') ?>"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="List__item">
                            <button class="Button Button--icon">
                                <svg class="Button__icon Icon Icon--medium">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= srcLib('codeunic', 'assets/icons/symbols.svg#notification') ?>"></use>
                                </svg>
                            </button>
                        </li>
                        <li class="List__item c-Dropdown">
                            <button class="Button Button--icon c-Dropdown__trigger">
                               <span class="Avatar Avatar--circle">
                                   <img src="<?= srcLib('codeunic', 'assets/images/avatar2.jpg') ?>" class="Avatar__image" alt="">
                               </span>
                            </button>
                            <ul class="c-Dropdown__menu">
                                <li class="c-Dropdown__item"><a href="<?= base_url('panel/') ?>" class="c-Dropdown__link">Panel de control</a></li>
                                <li class="c-Dropdown__item"><a href="<?= base_url('panel/configuracion/') ?>" class="c-Dropdown__link">Configuración</a></li>
                                <li class="c-Dropdown__item"><a href="<?= base_url('contacto/'); ?>" class="c-Dropdown__link">Contactar</a></li>
                                <li class="c-Dropdown__item"><a href="" class="c-Dropdown__link">Perfil</a></li>
                                <li class="c-Dropdown__item--separate"></li>
                                <li class="c-Dropdown__item"><a href="<?= base_url('usuario/cerrar-session/') ?>" class="c-Dropdown__link">Cerrar sessión</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </header>
    <?php endif; ?>
    <main>
        <header class="c-Panel-box">
            <figure class="c-Panel-box__banner">
                <img class="c-Panel-box__image" src="<?= imageUrl('cabezera-panel.jpg') ?>" alt="">
            </figure>
            <figure class="c-Panel-box__avatar" style="background-image: url(<?= imageUrl('avatar.jpg') ?>)"></figure>
            <section class="c-Panel-box__stats">
                <ul class="c-Panel-box__menu Lista Lista--horizontal">
                    <li class="Lista__item">
                        <span><?= $this->_animales; ?></span>
                        <a href="<?= base_url('panel/animales/') ?>" class="Lista__link--white">Animales</a>
                    </li>
                    <li class="Lista__item">
                        <span>0</span>
                        <a href="" class="Lista__link--white">Preferencias</a>
                    </li>
                    <li class="Lista__item">
                        <span>0</span>
                        <a href="" class="Lista__link--white">Segidores</a>
                    </li>
                    <li class="Lista__item">
                        <span>0</span>
                        <a href="" class="Lista__link--white">Mensajes</a>
                    </li>
                </ul>
                <a href="<?= $this->_urlEscaparate; ?>" class="c-Panel-box__link Boton Boton--raised-cyan">Ver escaparate</a>
            </section>
        </header>
        <section class="Grilla">
            <aside class="Grilla__xs--12 Grilla__sm--5 Grilla__md--3 Grilla__lg--3 Grilla__xl--3 Grilla__xxl--2">
                <div class="c-Widget">
                    <div class="c-Widget__header">
                        <h3 class="c-Widget__title">Menu</h3>
                    </div>
                    <div class="c-Widget__body">
                        <ul class="c-Lista">
                            <li class="c-Lista__item">
                                <a href="<?= base_url('panel/') ?>" class="c-Lista__link"><i class="fa fa-home c-Lista__icon"></i> Pagina Principal</a>
                            </li>
                            <li class="c-Lista__item"><a href="<?= base_url('panel/animales/') ?>" class="c-Lista__link"><i class="fa fa-paw c-Lista__icon"></i> Mis animales</a></li>
                            <?php if ($this->_acl->permiso('create-animal-default')): ?>
                                <li class="c-Lista__item"><a href="<?= base_url('anuncios/publicar-anuncio/'); ?>" class="c-Lista__link"><i class="fa fa-paw c-Lista__icon"></i> Publicar animal</a></li>
                            <?php elseif ($this->_acl->permiso('create-animal-pro')): ?>
                                <li class=""><a href="<?= base_url('panel/publicar-animal/'); ?>" class="c-Lista__link"><i class="fa fa-paw c-Lista__icon"></i> Publicar animal</a></li>
                            <?php endif; ?>
                            <li class=""><a href="<?= base_url('panel/configuracion/') ?>" class="c-Lista__link"><i class="fa fa-cog c-Lista__icon"></i> Configuracion</a></li>
                            <li class=""><a href="<?= base_url('usuario/cerrar-session/') ?>" class="c-Lista__link"><i class="fa fa-sign-out c-Lista__icon"></i> Cerrar sessión</a></li>
                        </ul>
                    </div>
                </div>
                <div class="c-Widget">
                    <div class="c-Widget__header">
                        <h3 class="c-Widget__title">Preferencias</h3>
                    </div>
                    <div class="c-Widget__body">
                        <ul class="c-Lista">
                            <li class="c-Lista__item">
                                <a href="<?= base_url('anuncios/') ?>" class="c-Lista__link">Listado de animales</a>
                            </li>
                            <li class="c-Lista__item">
                                <a href="" class="c-Lista__link">Listado de perreras</a>
                            </li>
                            <li class="c-Lista__item">
                                <a href="" class="c-Lista__link">Sugerencias?</a>
                            </li>
                            <li class="c-Lista__item">
                                <a href="" class="c-Lista__link">Ver Blog</a>
                            </li>
                            <li class="c-Lista__item">
                                <?php if ($this->_acl->permiso('create-animal-default')): ?>
                                    <a href="<?= base_url('anuncios/publicar-anuncio/'); ?>" class="c-Lista__link">Publicar animal</a>
                                <?php elseif ($this->_acl->permiso('create-animal-pro')): ?>
                                    <a href="<?= base_url('panel/publicar-animal/'); ?>" class="c-Lista__link">Publicar animal</a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="c-Widget">
                    <div class="c-Widget__header">
                        <h3 class="c-Widget__title">Te puede interesar</h3>
                    </div>
                    <div class="c-Widget__body">
                        <div>
                            <img class="img-fluid" src="<?= imageUrl('perro-listo.jpg') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="c-Widget">
                    <form action="" class="Form">
                        <div class="c-Widget__header">
                            <h3 class="c-Widget__title">Invita a un amigo</h3>
                        </div>
                        <div class="c-Widget__body">
                            <div class="c-Widget__container">
                                <div class="Form__group">
                                    <input type="text" class="Form__control" name="" placeholder="Nombre de tu amigo" id="">
                                </div>
                                <div class="Form__group">
                                    <input type="email" class="Form__control" name="" placeholder="Correo electronico" id="">
                                </div>
                            </div>
                        </div>
                        <div class="c-Widget__footer">
                            <button type="submit" class="Boton Boton--raised-cyan">Invitar</button>
                        </div>
                    </form>
                </div>
            </aside>
            <section class="Grilla__xs--12 Grilla__sm--7 Grilla__md--9 Grilla__lg--9 Grilla__xl--9 Grilla__xxl--10">
                <?php if (isset($this->panelTitle)): ?>
                    <div class="l-Widget">
                        <header class="l-Widget__header">
                            <h3 class="l-Widget__title"><?= $this->panelTitle; ?></h3>
                        </header>
                        <section class="l-Widget__body"></section>
                    </div>
                <?php endif; ?>
                <?php include_once($this->contenido); ?>
            </section>
        </section>
    </main>
</div>
<?php echo funciones_js(); ?>
<script src="<?= src('js/jquery-3.1.1.min.js') ?>"></script>
<?php if (isset($_layoutParams['js_plugin']) && count($_layoutParams['js_plugin'])): ?>
    <?php foreach ($_layoutParams['js_plugin'] as $js): ?>
        <script src="<?php echo $js; ?>" type="text/javascript"></script>
    <?php endforeach; ?>
<?php endif; ?>
<?php if (isset($_layoutParams['js']) && count($_layoutParams['js'])): ?>
    <?php foreach ($_layoutParams['js'] as $js): ?>
        <script src="<?php echo $js; ?>" type="text/javascript"></script>
    <?php endforeach; ?>
<?php endif; ?>
<script src="<?= publicJs('main.bundle') ?>"></script>
</body>
</html>