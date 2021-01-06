<style>
    .container-portada {
        background-image: url("./assets/image/hyundai4k.jpg");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 536px;
        overflow-x: hidden;


    }
</style>
<div class="container-portada">
    <div class="row">
        <div class="col col-12 col-md-12">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col col-12 ">
            <div style="margin-top: 5px;" class="svg-wrapper">
                <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                    <rect class="shape" height="60" width="320" />
                    <div class="text">Iniciar Sesion</div>
                </svg>
            </div>
        </div>
    </div>
    <hr>
</div>
<script src="./assets/js/Login.js"></script>
<link rel="stylesheet" href="./assets/css/VistaLogin/Login.css">
<link rel="stylesheet" href="./assets/css/VistaLogin/TextoHeader.css">
<link rel="stylesheet" href="./assets/css/VistaLogin/VisualLogin.css">
<div class="container">
    <section id="formHolder">
        <div class="row">
            <!-- Brand Box -->
            <div class="col-sm-6 brand">
                <a href="#" class="logo">APOLO <span>.</span></a>
                <div class="heading">
                    <h2>Apolo</h2>
                    <p>Recuerda Ingresar Todos Los Campos Requeridos</p>
                </div>
                <div class="success-msg">
                    <p>Great! You are one of our members now</p>
                    <a href="#" class="profile">Your Profile</a>
                </div>
            </div>
            <!-- Form Box -->
            <div class="col-sm-6 form">
                <!-- Login Form -->
                <div class="login form-peice switched">
                    <form class="login-form" action="./controllers/UsuariosController.php" method="POST">
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" id="correo" required>
                        </div>
                        <div class="form-group">
                            <label for="contraseña">Contraseña</label>
                            <input type="password" name="contraseña" id="contraseña" required>
                        </div>
                        <div class="CTA">
                            <div class="buttons1">
                                <button class="btn1 effect01" name="opcion" value="login"><span>Iniciar Sesion</span></button>
                                <a style="margin-left:30px; margin-top:30px" href="#" class="switch">
                                    <h6>Registrarme</h3>
                                </a>
                            </div>
                        </div>
                    </form>
                </div><!-- End Login Form -->
                <!-- Signup Form -->
                <div class="signup form-peice">
                    <form class="login-form" action="./controllers/UsuariosController.php" method="POST">
                        <div class="form-group">
                            <label for="loginemail">Nombre Completo</label>
                            <input type="text" name="nombre" id="loginemail" required>
                        </div>
                        <div class="form-group">
                            <label for="loginemail">Correo</label>
                            <input type="email" name="correo" id="loginemail" required>
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Contraseña</label>
                            <input type="password" name="contraseña" id="loginPassword" required>
                        </div>
                        <div class="CTA">
                            <div class="buttons1">
                                <button class="btn1 effect01" name="opcion" value="insertar"><span>Registrarme</span></button>
                                <a style="margin-left:30px; margin-top:30px" href="#" class="switch">
                                    <h6>Poseeo Una Cuenta</h3>
                                </a>
                            </div>
                        </div>
                    </form>
                </div><!-- End Signup Form -->
            </div>
        </div>
    </section>
</div>