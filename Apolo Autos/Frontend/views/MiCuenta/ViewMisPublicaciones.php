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
$dataAnuncio = Anuncio::ListarMisAutos();
?>

<style>
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

    @media screen and (max-width:800px) {
        .container {
            overflow-x: hidden;
        }
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
                    <div class="text">Mis Vehiculo </div>
                </svg>

            </div>
        </div>
    </div>

</div>
<div class="container" style="text-align: center;">
    <div class="row">
        <div class="col col-12 col-md-12">
            <h4> Bienvenido A Tus Publicaciones</h4>
            <p>Podras Visualizar Tus Publicaciones Luego De Hacer Tu Publicaciones. Con El Boton "Ver Vehiculo" Podras Ver La Parte Visual De Tu Publicacion Gratuita</p>
            <p>Si Deseas Obtener Que Tu Publicaciones Sea Premium Selecciona El Boton "Obtener Premium"</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="col col-12 col-md-12">
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
                                    <a href="/VerVehiculo.php?id=<?php echo $dataPublicacion['idpublicacion']; ?>" class="btn btn-primary ">Ver vehiculo</a>
                                    <a href="/Premium.php" class="btn btn-outline-warning ">Obtener Premium</a>
                                   

                                </div>
                                
                            </div>
                            
                        </div>

                    </div>
                </div>


            <?php } ?>
        </div>
    </div>

</div>