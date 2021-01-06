<?php
require_once("./model/Config.php");
$db = new Config();

require_once("./model/MarcasModel.php");
require_once("./model/CategoriasModel.php");
require_once("./model/TransmisionModel.php");
require_once("./model/RegionModel.php");
require_once("./model/AnuncioModel.php");
$dataMarcas = Marcas::listar();
$dataCategorias = Categorias::listar();
$dataTransmision = Transmision::listar();
$dataRegion = Region::listar();
$dataAnuncio = Anuncio::listar();
?>
<style>
    .container-portada {
        background-image: url("./assets/image/buscador.png");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 536px;
        overflow-x: hidden;




    }

    .container-fluid {

        margin-top: 20px;
    }

   





    .container .searchbox {
        position: relative;
        display: block;
        width: 100%;
        max-width: 53px;
        transition: 0.4s linear;
        overflow: hidden;
    }

    .container .searchbox .searchbox__input {
        display: block;
        appearance: none;
        width: 100%;
        border: none;
        outline: none;
        border-radius: 50px;
        background-color: #24233A;
        padding: 15px;
        color: #24233A;
        font-size: 20px;
        cursor: pointer;
        transition: 0.4s linear;
    }

    .container .searchbox .searchbox__input::placeholder {
        color: #24233A;
    }

    .container .searchbox .searchbox__icon {
        position: absolute;
        right: calc(53px / 2);
        top: 50%;
        transform: translate(50%, -50%);
        width: 20px;
        height: 20px;
        pointer-events: none;
    }

    .container .searchbox .searchbox__icon path {
        fill: #FF3737;
        transition: 0.4s linear;
    }

    .container .searchbox:focus-within {
        max-width: 300px;
    }

    .container .searchbox:focus-within .searchbox__input {
        background-color: #FFF;
        padding-right: 50px;
        box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.4);
    }

    .container .searchbox:focus-within .searchbox__icon path {
        fill: #ffc832;
    }

    .box {
        position: relative;
        max-width: 250px;
        padding: 50px;
        background: rgb(255, 255, 255, .2);


    }

    .opacidad {
        top: -10px;
        left: -20px;
        position: relative;


        max-width: 330px;
        padding: 50px;
        background: rgba(255, 255, 255, .3);
    }

    .letras-p {

        text-transform: uppercase;
        letter-spacing: .5em;
        display: inline-block;

        border-width: 4px 0;
        left: 400px;
        position: absolute;
        top: 68%;

        width: 40em;
        margin: 0 0 0 -20em;
    }

    .letras-span {


        font: 700 4em/1 "Oswald", sans-serif;
        letter-spacing: 0;

        display: block;



        /* Clip Background Image */

        background: url(./assets/image/animated_text_fill.png) repeat-y;
        -webkit-background-clip: text;
        background-clip: text;

        /* Animate Background Image */

        -webkit-text-fill-color: transparent;
        -webkit-animation: aitf 80s linear infinite;

        /* Activate hardware acceleration for smoother animations */

        -webkit-transform: translate3d(0, 0, 0);
        -webkit-backface-visibility: hidden;

    }


    /* Animate Background Image */

    @-webkit-keyframes aitf {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 100% 50%;
        }
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

    @media screen and (max-width:800px) {
        .letras-span {
            margin-top: 436px;

        }

        .container-portada {
            margin-top: -150px;
        }
    }

    @media screen and (min-width:800px) {
        .letras-span {
            margin-top: 446px;

        }

        .container-portada {
            margin-top: -30px;
        }
    }
</style>

<link rel="stylesheet" href="./assets/css/search.css" />

<div class="container-portada">
    <div class="row">
        <div class="col col-12 col-md-12">
            <p class="letras-p">
                <div class="col col-12 col-md-12">
                    <span class="letras-span">
                        Mi Cuenta
                    </span>
                </div>
            </p>
        </div>
    </div>
</div>
</div>

<div style="margin-top: 60px;" class="svg-wrapper">
    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
        <rect class="shape" height="60" width="320" />
        <div class="text">Buscador</div>




    </svg>

</div>
<div class="container-fluid">
    <div class="row">


        <div class="col col-12 col-md-4">
            <div style="background:rgba(0,0,0,0.6); color:#fff;" class="card">
                <div class="card-body">

                    <h2 style="text-align: center;">!Selecciona Tu Vehiculo!</h2>
                    <div class="row">


                        <div class="col col-12 col-md-12">
                            <select class="form-control" id="country" name="marca">

                                <option value="" disabled selected>Marca</option>
                                <?php foreach ($dataMarcas as $m) { ?>
                                    <option value="<?php echo $m['idmarca']; ?>"><?php echo $m['nombre']; ?></option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="col col-12 col-md-12">
                            <select class="form-control" id="country" name="categoria">

                                <option value="" disabled selected>Categoria</option>
                                <?php foreach ($dataCategorias as $c) { ?>
                                    <option value="<?php echo $c['idcategoria']; ?>"><?php echo $c['nombre']; ?></option>


                                <?php } ?>

                            </select>
                        </div>
                        <div class="col col-12 col-md-12">
                            <select class="form-control" id="country" name="modelo">

                                <option value="" disabled selected>Modelo</option>
                                <?php foreach ($dataModelo as $x) { ?>
                                    <option value="<?php echo $x['idmodelo']; ?>"><?php echo $x['nombre']; ?></option>


                                <?php } ?>

                            </select>
                        </div>
                        <div class="col col-12 col-md-12">

                            <select class="form-control" id="country" name="tipoventa">

                                <option value="" disabled selected>TipoVenta</option>
                                <?php foreach ($dataTipoVenta as $v) { ?>
                                    <option value="<?php echo $v['idtipo_vendedor']; ?>"><?php echo $v['nombre']; ?></option>


                                <?php } ?>

                            </select>
                        </div>
                        <div class="col col-12 col-md-12">
                            <select class="form-control" id="country" name="combustible">

                                <option value="" disabled selected>Combustible</option>
                                <?php foreach ($dataCombustible as $e) { ?>
                                    <option value="<?php echo $e['idcombustible']; ?>"><?php echo $e['nombre']; ?></option>


                                <?php } ?>

                            </select>

                        </div>
                        <div class="col col-12 col-md-12">
                            <select class="form-control" id="country" name="estadodelauto">

                                <option value="" disabled selected>Estado Del Auto</option>
                                <?php foreach ($dataEstadoAuto as $a) { ?>
                                    <option value="<?php echo $a['idestado_auto']; ?>"><?php echo $a['nombre']; ?></option>


                                <?php } ?>

                            </select>
                        </div>
                        <div class="col col-12 col-md-12">

                            <select class="form-control" id="country" name="transmision">

                                <option value="" disabled selected>Transmision</option>
                                <?php foreach ($dataTransmision as $t) { ?>
                                    <option value="<?php echo $t['idtransmision']; ?>"><?php echo $t['nombre']; ?></option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="col col-12 col-md-12">
                            <select class="form-control" id="country" name="region">

                                <option value="" disabled selected>Region</option>
                                <?php foreach ($dataRegion as $r) { ?>
                                    <option value="<?php echo $r['idregion']; ?>"><?php echo $r['nombre']; ?></option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="col col-12 col-md-12">
                            <button class="btn btn-danger" type="submit" value="publicar" name="opcion">Publicar Mi Vehiculo</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col col-12 col-md-8">
            <div class="row">
                <?php foreach ($dataAnuncio as $A) {
                    $publicacion = $db->Con->query("SELECT * FROM publicaciones WHERE idauto=$A[idauto]");
                    $dataPublicacion = $publicacion->fetch_assoc();
                    $imagenes = $db->Con->query("SELECT * FROM imagenes WHERE idpublicacion=$dataPublicacion[idpublicacion] ORDER BY RAND() LIMIT 1 ");
                    $sr = $imagenes->fetch_assoc();
                    $auto = $db->Con->query("SELECT * FROM autos WHERE idauto=$A[idauto]");
                    $dataAuto = $auto->fetch_assoc();

                ?>
                    <div class="col col-12 col-md-12">
                        <div class="card" style="margin-top: 10px; margin-bottom:10px;">
                            <div class="row no-gutters">
                                <div class="col-sm-5" style="background: #868e96;">
                                    <img style="object-fit:cover;  max-height:262px;" src="data:image/png;base64,<?php echo $sr['images']; ?>" class="card-img-top h-100" alt="...">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $dataPublicacion['titulo']; ?></h5>

                                        <p class="card-text"><?php echo substr($dataPublicacion['descripcion'], 0, 200); ?></p>

                                    </div>
                                    <div class="card-footer text-right">
                                        <h6>$<?php echo str_replace(',', '.', number_format($dataAuto['precio'])); ?></h6>
                                        <a href="/VerVehiculo.php?id=<?php echo $dataPublicacion['idpublicacion']; ?>" class="btn btn-primary stretched-link">Ver vehiculo</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                <?php } ?>
            </div>
        </div>



    </div>


</div>