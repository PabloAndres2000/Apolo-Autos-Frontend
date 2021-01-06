<?php

require_once("./config/db.php");
?>
<style>
    body {
        background-image: url("/assets/images/hyundai4k.jpg");
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/tabla.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css2/linearicons.css">
    <link rel="stylesheet" href="css2/font-awesome.min.css">
    <link rel="stylesheet" href="css2/bootstrap.css">
    <link rel="stylesheet" href="css2/magnific-popup.css">
    <link rel="stylesheet" href="css2/nice-select.css">
    <link rel="stylesheet" href="css2/animate.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css2/owl.carousel.css">
    <link rel="stylesheet" href="css2/main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <script src="js2/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js2/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js2/easing.min.js"></script>
    <script src="js2/hoverIntent.js"></script>
    <script src="js2/superfish.min.js"></script>
    <script src="js2/jquery.ajaxchimp.min.js"></script>
    <script src="js2/jquery.magnific-popup.min.js"></script>
    <script src="js2/owl.carousel.min.js"></script>
    <script src="js2/jquery.sticky.js"></script>
    <script src="js2/jquery.nice-select.min.js"></script>
    <script src="js2/waypoints.min.js"></script>
    <script src="js2/jquery.counterup.min.js"></script>
    <script src="js2/parallax.min.js"></script>
    <script src="js2/mail-script.js"></script>
    <script src="js2/main.js"></script>
    <link rel="stylesheet" href="./src/main.css">
    <link rel="shortcut icon" href="/assets/favicon.ico">
</head>

<body>
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-7 col-md-6 ">

                    <div class="drop-zone">
                        <span class="drop-zone__prompt">Drop file here or click to upload</span>
                        <input type="file" name="myFile" class="drop-zone__input">
                    </div>

                    <script src="./src/main.js"></script>
                </div>
                <div class="col-lg-5  col-md-6 header-right">
                    <h4 class="text-white pb-30">Seleccionar Tu Vehiculo</h4>
                    <form class="form" role="form" autocomplete="off">
                        <div class="form-group">
                            <div class="default-select" id="default-select">
                                <select>
                                    <option value="" disabled selected hidden>Marca</option>
                                    <?php
                                    $marcas = $conexion->query(" SELECT * FROM marcas");
                                    while ($data = $marcas->fetch_assoc()) {
                                    ?>
                                        <option value=" <?php echo $data["idmarca"];  ?>"><?php echo $data["nombre"]; ?></option>
                                    <?php
                                    }
                                    ?>



                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 wrap-left">
                                <div class="default-select" id="default-select">
                                    <select>
                                        <option value="" disabled selected hidden>Categoria</option>
                                        <?php
                                        $categoria = $conexion->query(" SELECT * FROM categorias");
                                        while ($data = $categoria->fetch_assoc()) {
                                        ?>
                                            <option value=" <?php echo $data["idcategoria"]; ?>"><?php echo $data["nombre"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 wrap-right">
                                <div class="default-select" id="default-select">
                                    <select>
                                        <option value="" disabled selected hidden>Publicador</option>
                                        <?php
                                        $vendedor = $conexion->query(" SELECT * FROM tipo_vendedores");
                                        while ($data = $vendedor->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $data["idtipo_vendedor"];  ?>"><?php echo $data["nombre"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 wrap-left">
                                <div class="default-select" id="default-select">
                                    <select>
                                        <option value="" disabled selected hidden>Tranmision</option>

                                        <?php
                                        $transmicion = $conexion->query(" SELECT * FROM transmisiones");
                                        while ($data = $transmicion->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $data["idtransmision"];  ?>"><?php echo $data["nombre"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 wrap-right">
                                <div class="default-select" id="default-select">
                                    <select>
                                        <option value="" disabled selected hidden>Combusitble</option>
                                        <?php
                                        $combustible = $conexion->query(" SELECT * FROM combustibles");
                                        while ($data = $combustible->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $data["idcombustible"];  ?>"><?php echo $data["nombre"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 wrap-left">
                                <div class="default-select" id="default-select">
                                    <select>
                                        <option value="" disabled selected hidden>Condicion</option>
                                        <?php
                                        $condicion = $conexion->query(" SELECT * FROM estados_autos");
                                        while ($data = $condicion->fetch_assoc()) {
                                        ?>
                                            <option value=" <?php echo $data["idestado_auto"];  ?>"><?php echo $data["nombre"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 wrap-right">
                                <div class="default-select" id="default-select">
                                    <select>
                                        <option value="" disabled selected hidden>Region</option>
                                        <?php
                                        $region = $conexion->query(" SELECT * FROM regiones");
                                        while ($data = $region->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $data["idregion"];  ?>"><?php echo $data["nombre"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="from-group">
                            <input class="form-control txt-field" type="text" name="name" placeholder="Nombre Completo">
                            <input class="form-control txt-field" type="email" name="email" placeholder="Correo">
                            <input class="form-control txt-field" type="tel" name="phone" placeholder="Numero De Telefono">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="reset" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirmar Mi Vehiculo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>





</body>

</html>