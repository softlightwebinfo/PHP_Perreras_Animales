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
                    <?php if (!Session::accesoViewSimple()): ?>
                        <li class="List__item rd-hidden-sm-max">
                            <a href="<?= base_url('usuario/login/') ?>" class="Button Button--neutral">
                                Login
                            </a>
                        </li>
                    <?php endif; ?>
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
        <?php include_once($this->contenido); ?>
    </main>
    <?php if (!isset($this->footer) OR ($this->footer == true)): ?>
        <?= $this->renderizarInclude('includes/components/footer', array()); ?>
    <?php endif; ?>
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