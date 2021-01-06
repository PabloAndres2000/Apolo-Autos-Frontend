<?php
require_once("./model/Config.php");
$db = new Config();

require_once("./model/MarcasModel.php");
require_once("./model/CategoriasModel.php");
require_once("./model/TransmisionModel.php");
require_once("./model/RegionModel.php");
require_once("./model/TipoVentaModel.php");
require_once("./model/EstadoAutoModel.php");
require_once("./model/CombustibleModel.php");
require_once("./model/CombustibleModel.php");
require_once("./model/ModeloModel.php");
require_once("./model/AnuncioModel.php");

$dataMarcas = Marcas::listar();
$dataCategorias = Categorias::listar();
$dataTransmision = Transmision::listar();
$dataRegion = Region::listar();
$dataTipoVenta = TipoVenta::listar();
$dataEstadoAuto = EstadoAuto::listar();
$dataCombustible = Combustible::listar();
$dataModelo = Modelo::listar();
$dataAnuncio = Anuncio::listarPremium();
?>

<style>
    .container-portada {
        background-image: url("./assets/image/lamborghini-centenario-negro-4862.png");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 516px;
        overflow-x: hidden;
    }

    /*letras premium*/
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

<div class="container-portada">
    <div class="row">
        <div class="col col-12 col-md-12">

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col col-12 col-md-12">
            <div class="svg-wrapper">
                <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                    <rect class="shape" height="60" width="320" />
                    <div class="text">Premium</div>




                </svg>

            </div>
        </div>
    </div>

</div>
<link rel="stylesheet" href="./assets/css/search.css" />
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }





    .container .searchbox {
        margin-left: 35px;
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

    .card:hover {
        box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
        transform: translatey(-2%);

    }

    .card {
        border-radius: 7px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
        cursor: default;
        transition: all 400ms ease;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    @media screen and (min-width:800px) {
        .container .searchbox {
            margin-left: -140px !important;
        }
    }
</style>
<div class="container">

    <div class="searchbox">
        <input type="text" class="searchbox__input" placeholder="Search..." />
        <svg class="searchbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17s-17-7.626-17-17S14.61,6,23.984,6z" />
        </svg>
    </div>



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
                                    <img style="object-fit:cover; max-height:262px;" src="data:image/png;base64,<?php echo $sr['images']; ?>" class="card-img-top h-100" alt="...">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <img style="margin-top:-20px !important; width:100px; height:60px;" src="https://vignette.wikia.nocookie.net/streets-of-rage/images/b/bd/5_ESTRELLAS.png/revision/latest?cb=20200428071928&path-prefix=es" />
                                        <h5 class="card-title" style="margin-top:-25px !important;"><?php echo $dataPublicacion['titulo']; ?></h5>

                                        <p class="card-text"><?php echo substr($dataPublicacion['descripcion'], 0, 200); ?></p>

                                    </div>
                                    <div class="card-footer text-right">
                                        <h6>$<?php echo str_replace(',', '.', number_format($dataAuto['precio'])); ?></h6>
                                        <a href="/PublicacionesPremium.php?id=<?php echo $dataPublicacion['idpublicacion']; ?>" class="btn btn-primary stretched-link">Ver vehiculo</a>
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