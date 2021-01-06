<?php
require_once("./model/Config.php");
$db = new Config;
require_once("./model/MarcasModel.php");
require_once("./model/CategoriasModel.php");
require_once("./model/TransmisionModel.php");
require_once("./model/RegionModel.php");
require_once("./model/TipoVentaModel.php");
require_once("./model/EstadoAutoModel.php");
require_once("./model/CombustibleModel.php");
require_once("./model/CombustibleModel.php");
require_once("./model/ModeloModel.php");
require_once("./model/UsuariosModel.php");
$dataMarcas = Marcas::listar();
$dataCategorias = Categorias::listar();
$dataTransmision = Transmision::listar();
$dataRegion = Region::listar();
$dataTipoVenta = TipoVenta::listar();
$dataEstadoAuto = EstadoAuto::listar();
$dataCombustible = Combustible::listar();
$dataModelo = Modelo::listar();
$usuarios = $db->Con->query("SELECT * FROM usuarios WHERE idusuario =$_SESSION[IDUSUARIO]");
$dataUsuario = $usuarios->fetch_assoc();
?>
<style>
    .container-portada {

        background-image: url("./assets/image/Laferrari-flagship-supercar-wings_2560x1600.jpg");
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;
        height: 736px;
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
        letter-spacing: 5px;
        color: rgb(0, 0, 0);
        top: -48px;
        position: relative;
    }

    .svg-wrapper:hover .shape {
        stroke-width: 2px;
        stroke-dashoffset: 0;
        stroke-dasharray: 760;
    }

    @media screen and(max-width:800px) {
        .container-fluid {
            display: none;
        }

        .container-fluid .imagen-interior {
            display: none;
        }
    }
</style>
<div class="container-portada">
    <div class="row">
        <div class="col"></div>
    </div>
</div>
<div style="margin-top: 70px;" class="svg-wrapper">
    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
        <rect class="shape" height="60" width="320" />
        <div class="text">Publicar Mi Premium</div>
    </svg>

</div>
<div class="container">
    <div class="row">
        <div class="col col-12 col-md-12">
            <h2 style="text-align: center;">¿Como Rellenar Mi Publicaciones?</h2>
            <p>Para poder rellenar el formulario para poder publicar tus publicaciones premium necesitas completar los campos. Primero sube las imagenes de tu vehiculo y rellena los campos restantes del lado derecho de las imagenes. Luego Mas Abajo encontraras un formulario para poder describir tu vehiculo por dentro en breves resumenes y asi expecificar de mejor manera tu vehiculo</p>
        </div>
    </div>
</div>

<div class="container-fluid ">
    <form enctype="multipart/form-data" action="../controllers/AnuncioController.php" method="POST">
        <div class="row ">

            <div class="col col-12 col-md-8 py-2">




                <div style="background:rgba(0,0,0,0.6); color:#fff; " class="card">
                    <div class="card-body main-section">
                        <h1 class="text-center ">Sube Las Imagenes De Tu Vehiculo</h1><br>

                        <div class="form-group">
                            <div class="file-loading">
                                <input id="file-1" type="file" multiple class="file" name="imagenes[]">
                            </div>
                        </div>


                    </div>
                </div>




                <script src="./assets/js/dropzoneImage.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
                <script>
                    $("#file-1").fileinput({
                        theme: 'fa',
                        uploadUrl: '#',
                        allowedFileExtensions: ['jpg', 'png', 'gif'],
                        overwriteInitial: false,
                        maxFileSize: 10000,
                        maxFilesNum: 10,
                        slugCallback: function(filename) {
                            return filename.replace('(', '_').replace(']', '_');
                        }
                    });
                </script>

            </div>

            <div class="col col-12 col-md-4 py-2">


                <div style="background:rgba(0,0,0,0.6); color:#fff; " class="card">
                    <div class="card-body">


                        <h2 style="text-align: center; padding: 0.6em;">!Selecciona Tu Vehiculo!</h2>
                        <div class="row">

                            <div class="col col-12 col-md-12">
                                <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Titulo">
                            </div>
                            <div class="col col-12 col-md-12 py-1">

                                <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion De Tu Vehiculo"></textarea>
                            </div>
                            <div class="col col-12 col-md-12 py-1">
                                <input class="form-control" type="number" id="año" name="año" placeholder="Año">
                            </div>
                            <div class="col col-12 col-md-12 py-1">
                                <input class="form-control" type="number" id="precio" name="precio" placeholder="Precio">
                            </div>
                            <div class="col col-12 col-md-12 py-1">
                                <input class="form-control" type="number" id="cilindro" name="cilindro" placeholder="Cilindrada">
                            </div>
                            <div class="col col-12 col-md-12 py-1">
                                <input class="form-control" type="number" id="kilometraje" name="kilometraje" placeholder="Kilometraje">
                            </div>
                            <div class="col col-12 col-md-6 py-1">
                                <select class="form-control" id="country" name="marca">

                                    <option value="" disabled selected>Marca</option>
                                    <?php foreach ($dataMarcas as $m) { ?>
                                        <option value="<?php echo $m['idmarca']; ?>"><?php echo $m['nombre']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col col-12 col-md-6 py-1">
                                <select class="form-control" id="country" name="categoria">

                                    <option value="" disabled selected>Categoria</option>
                                    <?php foreach ($dataCategorias as $c) { ?>
                                        <option value="<?php echo $c['idcategoria']; ?>"><?php echo $c['nombre']; ?></option>


                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col col-12 col-md-6 py-1">
                                <select class="form-control" id="country" name="modelo">

                                    <option value="" disabled selected>Modelo</option>
                                    <?php foreach ($dataModelo as $x) { ?>
                                        <option value="<?php echo $x['idmodelo']; ?>"><?php echo $x['nombre']; ?></option>


                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col col-12 col-md-6 py-1">

                                <select class="form-control" id="country" name="tipoventa">

                                    <option value="" disabled selected>TipoVenta</option>
                                    <?php foreach ($dataTipoVenta as $v) { ?>
                                        <option value="<?php echo $v['idtipo_vendedor']; ?>"><?php echo $v['nombre']; ?></option>


                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col col-12 col-md-6 py-1">
                                <select class="form-control" id="country" name="combustible">

                                    <option value="" disabled selected>Combustible</option>
                                    <?php foreach ($dataCombustible as $e) { ?>
                                        <option value="<?php echo $e['idcombustible']; ?>"><?php echo $e['nombre']; ?></option>


                                    <?php } ?>

                                </select>

                            </div>
                            <div class="col col-12 col-md-6 py-1">
                                <select class="form-control" id="country" name="estadodelauto">

                                    <option value="" disabled selected>Estado Del Auto</option>
                                    <?php foreach ($dataEstadoAuto as $a) { ?>
                                        <option value="<?php echo $a['idestado_auto']; ?>"><?php echo $a['nombre']; ?></option>


                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col col-12 col-md-6 py-1">

                                <select class="form-control" id="country" name="transmision">

                                    <option value="" disabled selected>Transmision</option>
                                    <?php foreach ($dataTransmision as $t) { ?>
                                        <option value="<?php echo $t['idtransmision']; ?>"><?php echo $t['nombre']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col col-12 col-md-6 py-1">
                                <select class="form-control" id="country" name="region">

                                    <option value="" disabled selected>Region</option>
                                    <?php foreach ($dataRegion as $r) { ?>
                                        <option value="<?php echo $r['idregion']; ?>"><?php echo $r['nombre']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col col-12 col-md-12 py-1">
                                <button class="btn btn-danger" type="submit" value="publicar" name="opcion">Publicar Mi Vehiculo</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="row  py-5">
            <div class="col col-12 col-md-7 ">
                <div class="imagen-interior">
                    <img width="1000" height="1016" src="./assets/image/1140-honda-accord-car-seat-technology-esp.imgcache.revc77a9cfd681a15a8d11da732b8d556bc.jpg" alt="" />

                </div>
            </div>
            <div class="col col-12 col-md-5">
                <section class="interior">


                    <div class="container " style="background-color: black;">
                        <div class="interior-text" style="color: white;">
                            <h2 style="text-align: center; padding: 0.5em;" class="py-3">Diseño Interior</h2>
                            <p>Describe Un Pequeño Resumen De Como Es EL Diseño Interior De TU Vehiculo</p>
                            <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Descripcion Titulo">


                            <h3 style="text-align: center;" class="py-2">Características:</h3>
                            <p style="text-align: center;">Describe Cada Parte Requeridas De Tu Vehiculo</p>
                            <div class="interior-points">
                                <div class="container-slider">
                                    <div id="interior-points">
                                        <div>
                                            <p class="interior-point">
                                                <p style="padding: 0.5em;"><strong>Plazas</strong><br />
                                                    <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Describenos Las Plazas De Tu Vehiculo"></p>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="interior-point">
                                                <p style="padding: 0.5em;"><strong>Volante</strong><br />
                                                    <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Describe Como Es Tu Volante"></p>
                                            </p>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="interior-point">
                                                <p style="padding: 0.5em;"><strong>Climatizador</strong><br />
                                                    de dos zonas</p>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="interior-point">
                                                <p style="padding: 1em;"><strong>Radio </strong><br />
                                                    <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Describe Tu Radio"></p>
                                            </p>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="interior-point">
                                                <p style="padding: 1em;"><strong>Tapiz</strong><br />
                                                    <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Describe Tu Tapiz"></p>
                                            </p>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="interior-point">
                                                <p style="padding: 1em;"><strong>Selector rotatorio</strong><br />
                                                    de marchas</p>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="interior-point">
                                                <p style="padding: 1em;"><strong>Asiento delantero abatible</strong><br />
                                                    40/20/40.</p>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="interior-point">
                                                <p style="padding: 1em;"><strong>Luneta trasera</strong><br />
                                                    con apertura de ventana</p>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </form>
</div>

