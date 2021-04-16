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

    <div class="container_login">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form" name="formLogin" id="formLogin">
                    <h2 class="title text-center">Bienvenido de nuevo,</h2>
                    <h5 class="text-center">Inicie sesión en su cuenta a continuación.</h5>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" id="txtEmail" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="txtPassword" placeholder="Password" />
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
    <!-- swetAlert -->
    <script src="<?= media(); ?>/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/js/<?= $data["page_funtions_js"]; ?>"></script>
</body>

</html>