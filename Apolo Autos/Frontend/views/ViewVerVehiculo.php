<?php
require_once("./model/Config.php");
$db = new Config();
require_once("./model/CombustibleModel.php");
$dataCombustible = Combustible::listar();
$idauto = $_GET['id'];
?>
<link rel="stylesheet" href="./assets/css/vistaPublicacionesAutos.css">
<style>
    .container-portada {
        background-image: url("./assets/image/auto-side-view-sports-car-4k_1538934874.jpg");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 336px;
        overflow-x: hidden;
    }
</style>
<div class="container-portada">
    <div class="row">
        <div class="col col-12 col-md-12">

        </div>
    </div>
</div>
<div style="margin-top: 60px;" class="svg-wrapper">
    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
        <rect class="shape" height="60" width="320" />
        <div class="text">Vista</div>

    </svg>

</div>

<div class="container">
    <div class="row">
        <?php
        $publicacion = $db->Con->query("SELECT * FROM publicaciones WHERE idauto=$idauto");
        $dataPublicacion = $publicacion->fetch_assoc();

        $auto = $db->Con->query("SELECT * FROM autos WHERE idauto=$idauto");
        $dataAuto = $auto->fetch_assoc();

        $combustible = $db->Con->query("SELECT * FROM combustibles WHERE idcombustible = $dataAuto[idcombustible]");
        $dataCombustible = $combustible->fetch_assoc();

        $categoria = $db->Con->query("SELECT * FROM categorias WHERE idcategoria = $dataAuto[idcategoria]");
        $dataCategoria = $categoria->fetch_assoc();

        $transmision = $db->Con->query("SELECT * FROM transmisiones WHERE idtransmision = $dataAuto[idtransmision]");
        $dataTransmision = $transmision->fetch_assoc();

        $estadoAuto = $db->Con->query("SELECT * FROM estados_autos WHERE idestado_auto = $dataAuto[idestado_auto]");
        $dataEstadoDelAuto = $estadoAuto->fetch_assoc();

        $imagenes = $db->Con->query("SELECT * FROM imagenes WHERE idpublicacion=$dataPublicacion[idpublicacion] ORDER BY RAND() ");
        $dataImagenes = $imagenes->fetch_all(MYSQLI_ASSOC);
        ?>
        <div class="col col-12 col-md-12">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">

                            <div class="preview-pic tab-content">

                                <?php $x = 1;
                                foreach ($dataImagenes as $i) {
                                    $clase = "";
                                    if ($x == 1) {
                                        $clase = "active";
                                    } else {
                                        $clase = "";
                                    }
                                ?>

                                    <div class="tab-pane <?php echo $clase; ?> " id="pic-<?php echo $x; ?>"><img class="d-block w-100" src="<?php echo 'data:image/png;base64,' . $i['images']; ?>" /></div>
                                <?php $x++;
                                } ?>
                            </div>

                            <ul class="preview-thumbnail nav nav-tabs">

                                <?php $z = 1;

                                foreach ($dataImagenes as $img) {
                                    $c = "";
                                    if ($z == 1) {
                                        $c = "class='active'";
                                    } else {

                                        $c = "";
                                    }

                                ?>

                                    <li <?php echo $c; ?>><a data-target="#pic-<?php echo $z; ?>" data-toggle="tab"><img class="d-block w-100" src="<?php echo 'data:image/png;base64,' . $img['images'];  ?>" /></a></li>
                                <?php $z++;
                                } ?>
                            </ul>

                        </div>


                        <div class="details col-md-6">
                            <h3><?php echo $dataPublicacion['titulo']; ?></h3>
                            <p><?php echo $dataPublicacion['descripcion']; ?></p>
                            <h4 class="price">Valor <span>$<?php echo str_replace(',', '.', number_format($dataAuto['precio'])); ?></span></h4>
                            <p class="vote"><img src="./assets/image/calendar.png" style="height:30px; margin-left:-10px; "><strong>Año: <?php echo $dataAuto['año']; ?></strong> <strong></strong></p>
                            <p class="vote"><img src="./assets/image/car (1).png" style="height:30px; margin-left:-10px; "><strong>Estado Del Vehiculo: <?php echo $dataEstadoDelAuto['nombre']; ?></strong> <strong></strong></p>
                            <p class="vote"><img src="./assets/image/order.png" style="height:30px; margin-left:-10px; "><strong>Categoria: <?php echo $dataCategoria['nombre']; ?></strong> <strong></strong></p>
                            <p class="vote"><img src="./assets/image/cilinder.png" style="height:30px; margin-left:-10px; "><strong> Cilindrada: <?php echo str_replace(',', '.', number_format($dataAuto['cilindros'])); ?></strong> <strong></strong></p>
                            <p class="vote"><img src="./assets/image/speed (1).png" style="height:30px; margin-left:-10px; "><strong> Kilometraje: <?php echo str_replace(',', '.', number_format($dataAuto['kilometraje'])); ?></strong> <strong></strong></p>
                            <p class="vote"><img src="./assets/image/gas-station.png" style="height:30px; margin-left:-10px; "><strong> Combustible: <?php echo $dataCombustible['nombre']; ?></strong> <strong></strong></p>
                            <p class="vote"><img src="./assets/image/gearbox.png" style="height:30px; margin-left:-10px; "><strong> Combustible: <?php echo $dataTransmision['nombre']; ?></strong> <strong></strong></p>


                            <div class="action">
                                <a target="_blank" class="add-to-cart btn btn-default" href="https://wa.me/<?php echo $dataPublicacion['telefono']; ?>?text=Hola " type="button">Enviar Whatsapp</a>
                                <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php ?>

    </div>
   