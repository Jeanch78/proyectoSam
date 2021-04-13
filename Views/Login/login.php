<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tienda virtual sam">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="author" content="Jean&Damian">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media(); ?>/images/favicon.ico">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title><?= $data["page_tag"]; ?></title>
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">

    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">

</head>

<body>
    <!-- <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Bienvenido de nuevo,</div>
                                            <span>Inicie sesión en su cuenta a continuación.</span>
                                        </h4>
                                    </div>
                                    <form class="">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="email" id="exampleEmail" placeholder="Email ..." type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="password" id="examplePassword" placeholder="Password ..." type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="alertLogin" class="text-center"></div>
                                    </form>
                                    <div class="divider"></div>
                                    <h6 class="mb-0">¿No tienes cuenta?<a href="javascript:void(0);" class="text-primary">Regístrate ahora</a></h6>
                                </div>
                                <div class="modal-footer clearfix">
                                    <div class="float-left">
                                        <a href="javascript:void(0);" class="btn-lg btn btn-link">Recuperar contraseña</a>
                                    </div>
                                    <div class="float-right">
                                        <button class="btn btn-primary btn-lg">Iniciar sesión en el panel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © ProyectoSam 2021</div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container_login">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form">
                    <h2 class="title text-center">Bienvenido de nuevo,</h2>
                    <h5 class="text-center">Inicie sesión en su cuenta a continuación.</h5>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Iniciar sesión" class="btn solid" />
                    <p class="social-text">Nuestras redes sociales</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="#" class="sign-up-form">
                    <h3 class="title text-center">¿Recuperar tu contraseña?</h3>
                    <h5>Ingresar email</h5>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <input type="submit" class="btn" value="Reiniciar" />
                    <p class="social-text">Nuestras redes sociales</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>¿Olvidaste tu contraseña?</h3>
                    <p>
                        Si olvidaste tus credenciales dar click en Recuperar ,
                        y seguir los pasos requeridos.
                        
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Recuperar
                    </button>
                </div>
                <img src="<?= media() ?>/images/login/undraw_unlock.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Iniciar Sesion?</h3>
                    <p>
                        iniciar sesion en el panel administrativo de la Empresa
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Regresar
                    </button>
                </div>
                <img src="<?= media() ?>/images/login/message.svg" class="image text-center" alt="" />
            </div>
        </div>
    </div>
    </section>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/jquery-3.6.0.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap5.min.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/js/main.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/js/<?= $data["page_funtions_js"]; ?>"></script>
</body>

</html>