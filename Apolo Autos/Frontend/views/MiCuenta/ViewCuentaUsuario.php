<?php
require_once("./model/Config.php");
$db = new Config;

require_once("./model/UsuariosModel.php");

$usuarios = $db->Con->query("SELECT * FROM usuarios WHERE idusuario =$_SESSION[IDUSUARIO]");
$dataUsuario = $usuarios->fetch_assoc();
?>
<style>
    .body {
        overflow-x: hidden;
    }

    .container-portada {
        background-image: url("./assets/image/peugeot508.png");
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;
        height: 640px;
        overflow-x: hidden;

    }

    .svg-wrapper {

        position: relative;
        top: 65%;
        transform: translateY(-50%);
        margin: 0 auto;
        width: 320px;
    }

    .shape {
        stroke-dasharray: 140 540;
        stroke-dashoffset: -474;
        stroke-width: 8px;
        fill: transparent;
        stroke: #F20E0E;
        border-bottom: 5px solid black;
        transition: stroke-width 1s, stroke-dashoffset 1s, stroke-dasharray 1s;
    }

    .text {
        text-align: center;
        font-family: 'Roboto Condensed';
        font-size: 22px;
        line-height: 32px;
        letter-spacing: 8px;
        color: rgb(0, 0, 0);
        top: -48px;
        position: relative;
    }

    .svg-wrapper:hover .shape {
        stroke-width: 2px;
        stroke-dashoffset: 0;
        stroke-dasharray: 760;
    }
</style>
<style>
    @media screen and (min-width:800px) {
        .container1 {

            margin-left: 500px !important;
        }

        .svg-wrapper {
            margin-left: 390px;
        }

    }

    @media screen and (max-width:800px) {


        .svg-wrapper {

            margin-left: 30px;

        }

    }
</style>
<div class="container-portada">
    <div class="row">
        <div class="col col-12 col-md-12">

        </div>
    </div>
</div>
<div class="container" style="overflow-x:hidden">
    <div class="row">

        <div style="margin-top: 60px;" class="svg-wrapper">
            <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                <rect class="shape" height="60" width="320" />
                <div class="text">Mi Cuenta</div>

            </svg>

        </div>

    </div><!-- /.container -->
</div>

<hr>
<div class="container1" style="overflow-x:hidden">
    <div class="row">
        <div class="col col-12 col-md-6">
            <div style="background:rgba(0,0,0,0.6); color:#fff; " class="card">
                <div class="card-body">
                    <form action="./controllers/UsuariosController.php" method="$_POST">
                        <h2 style="text-align: center;">Tu Informacion</h2>
                        <div class="col col-12 col-md-12">
                            <p>Nombre Completo</p>
                            <input style="margin-bottom:2px;" class="form-control" type="text" id="nombre" name="nombre" readonly value="<?php echo $dataUsuario["nombre"];  ?>">
                        </div>
                        <div class="col col-12 col-md-12">
                            <p>Correo </p>
                            <input style="margin-bottom:2px;" class="form-control" type="Email" id="correo" name="correo" readonly value="<?php echo $dataUsuario["correo"];  ?>">
                        </div>
                        <div class="col col-12 col-md-12">
                            <p>Contraseña </p>
                            <input style="margin-bottom:2px;" class="form-control" type="password" id="contraseña" name="contraseña" readonly value="<?php echo $dataUsuario["contraseña"];  ?>">
                        </div>
                        <div class="col col-12 col-md-12 py-3" >
                            <button href=""type="button" name="modificar" class="btn btn-outline-warning">Modificar Mi Informacion</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<hr>