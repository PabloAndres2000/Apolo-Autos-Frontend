<?php
require_once("./model/Config.php");
$db = new Config();
require_once("./model/CombustibleModel.php");
$dataCombustible = Combustible::listar();
$idauto = $_GET['id'];
?>
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

$imagenes = $db->Con->query("SELECT * FROM imagenes WHERE idpublicacion=$dataPublicacion[idpublicacion] ORDER BY RAND()   ");
$dataImagenes = $imagenes->fetch_all(MYSQLI_ASSOC);

$imagenesHeader = $db->Con->query("SELECT * FROM imagenes WHERE idpublicacion=$dataPublicacion[idpublicacion] ORDER BY RAND() limit 3  ");
$dataImagenesHeader = $imagenesHeader->fetch_all(MYSQLI_ASSOC);
?>
<style>
    body {
        overflow-x: hidden;
    }
</style>
<link rel="stylesheet" href="./assets/css/premium(general).css">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

    </ol>

    <div class="carousel-inner">
        <?php $x = 1;
        foreach ($dataImagenesHeader as $i) {
            $clase = "";
            if ($x == 1) {
                $clase = "active";
            } else {
                $clase = "";
            }
        ?>

            <div   class="carousel-item  <?php echo $clase; ?>" id="<?php echo $clase; ?>" width="100%" height="400px" style="background-image:url('<?php echo 'data:image/png;base64,' . $i['images']; ?>');  "></div>



        <?php $x++;
        } ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<style>
    /* Text Body*/
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

    .text-vista {
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
<div class="container">
    <div class="row">
        <div class="col col-12 col-md-12">
            <div class="svg-wrapper">
                <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                    <rect class="shape" height="60" width="320" />
                    <div class="text-vista">Premium Vista<?php ?></div>
                </svg>
                <div class="star-rating " style="font-size:38px; margin-top:-40px; margin-left:55px">
                    <a style="color: #f39c12; ">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                </div>
            </div>

        </div>

    </div>
    <hr>
</div>
<link rel="stylesheet" href="./assets/css/VistaPremium/CardPremium.css">
<div class="container">
    <div class="row">
        <div class="col col-12 col-md-3">
            <div style="margin-top: 20px;" class="super-box1">
                <div class="container-icon1">
                    <div class="box1">
                        <div class="icon_bg1"></div>
                    </div>
                    <div class="icon1">
                        <svg width="42px" height="26px" viewBox="0 0 42 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                    <stop stop-color="#648CFF" offset="0%"></stop>
                                    <stop stop-color="#4575FB" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g id="working" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="pablito" transform="translate(-227.000000, -3528.000000)">
                                    <rect fill="#FFFFFF" x="0" y="0" width="1440" height="4857"></rect>
                                    <g id="Group-19" transform="translate(180.000000, 3501.000000)">
                                        <g id="1" transform="translate(25.000000, 0.000000)">
                                            <g id="Group-26" transform="translate(5.000000, 0.000000)">
                                                <g id="Group-16" transform="translate(17.000000, 27.000000)">
                                                    <g id="noun_578648_cc-(1)" transform="translate(3.135583, 0.000000)" fill="url(#linearGradient-1)">
                                                        <img src="./assets/image/premium.png" style="height:56px; margin-left:-42px; margin-top:-8px">
                                                    </g>
                                                    <ellipse id="Oval-16" fill="#3364ED" opacity="0.400000006" transform="translate(39.194782, 10.395000) scale(-1, -1) translate(-39.194782, -10.395000) " cx="39.1947824" cy="10.395" rx="2.82202433" ry="2.835"></ellipse>
                                                    <ellipse id="Oval-16-Copy-2" fill="#3364ED" opacity="0.400000006" transform="translate(35.745642, 18.270000) scale(-1, -1) translate(-35.745642, -18.270000) " cx="35.7456415" cy="18.27" rx="1.88134955" ry="1.89"></ellipse>
                                                    <ellipse id="Oval-16-Copy" fill="#3364ED" opacity="0.400000006" transform="translate(2.508466, 3.150000) scale(-1, -1) translate(-2.508466, -3.150000) " cx="2.50846607" cy="3.15" rx="2.50846607" ry="2.52"></ellipse>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="text">
                    <p class="title">
                        Premium
                    </p>
                </div>
            </div>
        </div>
        <div class="col col-12 col-md-3">
            <div style="margin-top: 20px;" class="super-box1">
                <div class="container-icon1">
                    <div class="box1">
                        <div class="icon_bg1"></div>
                    </div>
                    <div class="icon1">
                        <svg width="42px" height="26px" viewBox="0 0 42 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                    <stop stop-color="#648CFF" offset="0%"></stop>
                                    <stop stop-color="#4575FB" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g id="working" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="pablito" transform="translate(-227.000000, -3528.000000)">
                                    <rect fill="#FFFFFF" x="0" y="0" width="1440" height="4857"></rect>
                                    <g id="Group-19" transform="translate(180.000000, 3501.000000)">
                                        <g id="1" transform="translate(25.000000, 0.000000)">
                                            <g id="Group-26" transform="translate(5.000000, 0.000000)">
                                                <g id="Group-16" transform="translate(17.000000, 27.000000)">
                                                    <g id="noun_578648_cc-(1)" transform="translate(3.135583, 0.000000)" fill="url(#linearGradient-1)">
                                                        <img src="./assets/image/premium.png" style="height:56px; margin-left:-42px; margin-top:-8px">
                                                    </g>
                                                    <ellipse id="Oval-16" fill="#3364ED" opacity="0.400000006" transform="translate(39.194782, 10.395000) scale(-1, -1) translate(-39.194782, -10.395000) " cx="39.1947824" cy="10.395" rx="2.82202433" ry="2.835"></ellipse>
                                                    <ellipse id="Oval-16-Copy-2" fill="#3364ED" opacity="0.400000006" transform="translate(35.745642, 18.270000) scale(-1, -1) translate(-35.745642, -18.270000) " cx="35.7456415" cy="18.27" rx="1.88134955" ry="1.89"></ellipse>
                                                    <ellipse id="Oval-16-Copy" fill="#3364ED" opacity="0.400000006" transform="translate(2.508466, 3.150000) scale(-1, -1) translate(-2.508466, -3.150000) " cx="2.50846607" cy="3.15" rx="2.50846607" ry="2.52"></ellipse>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="text">
                    <p class="title">
                        Premium
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>

</style>
<link rel="stylesheet" href="./assets/css/VistaPremium/imagenes.css">

<div class="container">


    <div class="row">

        <div class="titulo" style="border: solid 1px #E4E3E3;">
            <h6><?php echo $dataPublicacion['titulo']; ?></h6>
        </div>
        <div class="col col-12 col-md-12">
            <div class="main">
                <div class="track">
                    <ul>
                        <?php $z = 1;

                        foreach ($dataImagenes as $img) {
                            $c = "";
                            if ($z == 1) {
                                $c = "class='active'";
                            } else {

                                $c = "";
                            }

                        ?>

                            <li style="object-fit:cover; " <?php echo $c; ?>><a data-target="#pic-<?php echo $z; ?>" data-toggle="tab"><img src="<?php echo 'data:image/png;base64,' . $img['images'];  ?>" /></a></li>

                        <?php $z++;
                        } ?>
                    </ul>
                </div>
                <div class="slides">
                    <?php $x = 1;
                    foreach ($dataImagenes as $i) {
                        $clase = "";
                        if ($x == 1) {
                            $clase = "active";
                        } else {
                            $clase = "";
                        }
                    ?>
                        <a href="#slide1 " class="<?php echo $clase; ?> " id="<?php echo $x; ?>"><img src="<?php echo 'data:image/png;base64,' . $i['images']; ?>" alt=""></a>

                    <?php $x++;
                    } ?>
                </div>
            </div>
        </div>

    </div>
</div>

<style type="text/css">
    .form-style-9 {
        max-width: 450px;
        background: #FAFAFA;
        padding: 30px;
        margin: 50px auto;
        box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
        border-radius: 10px;
        border: 6px solid #305A72;
    }

    .form-style-9 ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .form-style-9 ul li {
        display: block;
        margin-bottom: 10px;
        min-height: 35px;
    }

    .form-style-9 ul li .field-style {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        padding: 8px;
        outline: none;
        border: 1px solid #B0CFE0;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;

    }

    .form-style-9 ul li .field-style:focus {
        box-shadow: 0 0 5px #B0CFE0;
        border: 1px solid #B0CFE0;
    }

    .form-style-9 ul li .field-split {
        width: 100%;
    }

    .form-style-9 ul li .field-full {
        width: 100%;
    }

    .form-style-9 ul li input.align-left {
        float: left;
    }

    .form-style-9 ul li input.align-right {
        float: right;
    }

    .form-style-9 ul li textarea {
        width: 100%;
        height: 100px;
    }

    .form-style-9 ul li input[type="button"],
    .form-style-9 ul li input[type="submit"] {
        -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
        -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
        box-shadow: inset 0px 1px 0px 0px #3985B1;
        background-color: #216288;
        border: 1px solid #17445E;
        display: inline-block;
        cursor: pointer;
        color: #FFFFFF;
        padding: 8px 18px;
        text-decoration: none;
        font: 12px Arial, Helvetica, sans-serif;
    }

    .form-style-9 ul li input[type="button"]:hover,
    .form-style-9 ul li input[type="submit"]:hover {
        background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
        background-color: #28739E;
    }

    .botao-wpp {
        text-decoration: none;
        color: #eee;
        display: inline-block;
        background-color: #25d366;
        font-weight: bold;
        padding: 1rem 2rem;
        border-radius: 3px;
    }

    .botao-wpp:hover {
        background-color: darken(#25d366, 5%);
    }

    .botao-wpp:focus {
        background-color: darken(#25d366, 15%);
    }

    /* só centraliza o botão */


    @media screen and (min-width:800px) {
        .form-style-9 {
            margin-left: 700px;
            margin-top: -600px;


        }

        .wsp {
            margin-top: -50px;
            margin-left: 830px;
        }
    }

    @media screen and (max-width:800px) {


        .wsp {

            margin-left: 90px;
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col col-12 col-md-12">
            <form class="form-style-9">
                <ul>
                    <p>$15.000.000</p>
                    <li>
                        <input type="text" name="field1" class="field-style field-split align-left" placeholder="Name" />
                        <input type="email" name="field2" class="field-style field-split align-right" placeholder="Email" />

                    </li>
                    <li>
                        <input type="text" name="field3" class="field-style field-split align-left" placeholder="Phone" />
                        <input type="url" name="field4" class="field-style field-split align-right" placeholder="Website" />
                    </li>
                    <li>
                        <input type="text" name="field3" class="field-style field-full align-none" placeholder="Subject" />
                    </li>
                    <li>
                        <textarea name="field5" class="field-style" placeholder="Message"></textarea>
                    </li>
                    <li>
                        <input type="submit" value="Send Message" />
                    </li>
                </ul>
            </form>

        </div>
        <div class="col col-12 col-md-12">
            <div class="wsp">
                <a href="https://wa.me/<?php echo $dataPublicacion['telefono']; ?>?text=Hola " class="botao-wpp">
                    <!-- ícone -->
                    <i class="fa fa-whatsapp"></i>
                    whatsapp
                </a>
            </div>
            <br />
        </div>
    </div>

</div>

<style>
    @media screen and (max-width:800px) {
        .images-icon {

            margin-left: 145px !important;
        }


    }
</style>
<div class="container py-4" style="background-color:#f6f6f6;">
    <h3 class="" style="text-align: center;">Caracteristicas</h3> </br> </br>
    <div class="row">
        <div class="col col-12 col-md-3">
            <img class="images-icon" src="./assets/image/gearbox (1).png" style="height:56px; margin-left:100px">
            <p style="text-align: center;">Transmisión automática de 8 velocidades y tracción 4x4 </p>

        </div>
        <div class="col col-12 col-md-3">
            <img class="images-icon" src="./assets/image/car (2).png" style="height:56px; margin-left:100px">
            <p style="text-align: center;">Combustible <?php echo $dataCombustible['nombre']; ?> </p>


        </div>
        <div class="col col-12 col-md-3">
            <img class="images-icon" src="./assets/image/speed (2).png" style="height:56px; margin-left:100px">
            <p style="text-align: center;">Kilometraje <?php echo str_replace(',', '.', number_format($dataAuto['kilometraje'])); ?> Km </p>


        </div>
        <div class="col col-12 col-md-3">
            <img class="images-icon" src="./assets/image/calendar (1).png" style="height:56px; margin-left:100px">
            <p style="text-align: center;">Año <?php echo $dataAuto['año']; ?> </p>


        </div>
        <div class="col col-12 col-md-3">
            <img class="images-icon" src="./assets/image/car (3).png" style="height:56px; margin-left:100px">
            <p style="text-align: center;">Estado Del Vehiculo: <?php echo $dataEstadoDelAuto['nombre']; ?> </p>


        </div>
        <div class="col col-12 col-md-3">
            <img class="images-icon" src="./assets/image/checklist.png" style="height:56px; margin-left:100px">
            <p style="text-align: center;">Categoria: <?php echo $dataCategoria['nombre']; ?> </p>


        </div>
        <div class="col col-12 col-md-3">
            <img class="images-icon" src="./assets/image/cilinder (1).png" style="height:56px; margin-left:100px">
            <p style="text-align: center;">Cilindrada: <?php echo str_replace(',', '.', number_format($dataAuto['cilindros'])); ?> </p>


        </div>
        <div class="col col-12 col-md-3">
            <img class="images-icon" src="./assets/image/money.png" style="height:56px; margin-left:100px">
            <p style="text-align: center;">Valor: Valor <span>$<?php echo str_replace(',', '.', number_format($dataAuto['precio'])); ?></p>


        </div>
    </div>

</div>


<div class="container" style="background-color:#f6f6f6;margin-top: 10px; margin-bottom:10px;"><br />
    <h2> Rendimiento y Seguridad </h2>
    <div class="row">
        <div class="col col-12 col-md-7">
            <p style="margin-bottom: 1.5em;box-sizing: inherit;">Diseñamos nuestras camionetas para que duren más y te mantengan seguro. Es por eso que cada <strong>RAM 1500</strong> está equipada con la tecnología de seguridad más avanzada, que incluye zonas de deformación programada, barras para impactos laterales y 6 airbags para protección incluyendo laterales tipo cortina.</p>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-md-6">
            <p>Cuenta con diversos sistemas de seguridad como:</p>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-md-6">
            <ul>
                <li style="margin-left:50px">
                    <p>Frenos de disco a las 4 ruedas, con sistema ABS</p>
                </li>
                <li style="margin-left:50px">
                    <p>Sistema de asistencia para estacionamiento trasero con cámara Park View y sensores Park Sense</p>
                </li>
                <li style="margin-left:50px">
                    <p>Sistema de monitoreo e indicador de presión de neumáticos/p>
                </li>
                <li style="margin-left:50px">
                    <p>Sistema inmovilizador con llave centinela Sentry Key</p>
                </li>
                <li style="margin-left:50px">
                    <p>Sensor de humedad</p>
                </li>
            </ul>
        </div>
    </div>


</div>
<div class="container" style="background-color:#f6f6f6;margin-top: 10px; margin-bottom:10px;"><br />
    <h2 class="py-5 " style="text-align: center;"> Descripcion </h2>
    <div class="row">
        <div class="col col-12 col-md-12">
            <p style="text-align: center;"> <?php echo $dataPublicacion['descripcion']; ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-12 col-md-7">
        <img width="1000" height="1016" src="https://www.ramlatam.com/cl/wp-content/uploads/sites/6/2018/09/ram-1500-slt-quad-cab-4x4-interior-scaled.jpg" class="attachment-full size-full" alt="" srcset="https://www.ramlatam.com/cl/wp-content/uploads/sites/6/2018/09/ram-1500-slt-quad-cab-4x4-interior-scaled.jpg 2560w, https://www.ramlatam.com/cl/wp-content/uploads/sites/6/2018/09/ram-1500-slt-quad-cab-4x4-interior-300x200.jpg 300w, https://www.ramlatam.com/cl/wp-content/uploads/sites/6/2018/09/ram-1500-slt-quad-cab-4x4-interior-1024x683.jpg 1024w, https://www.ramlatam.com/cl/wp-content/uploads/sites/6/2018/09/ram-1500-slt-quad-cab-4x4-interior-768x512.jpg 768w, https://www.ramlatam.com/cl/wp-content/uploads/sites/6/2018/09/ram-1500-slt-quad-cab-4x4-interior-1536x1024.jpg 1536w, https://www.ramlatam.com/cl/wp-content/uploads/sites/6/2018/09/ram-1500-slt-quad-cab-4x4-interior-2048x1365.jpg 2048w" sizes="(max-width: 2560px) 100vw, 2560px" />
    </div>
    <div class="col col-12 col-md-5">
        <section class="interior">


            <div class="container " style="background-color: black;">
                <div class="interior-text" style="color: white;">
                    <h2 style="text-align: center; padding: 1em;" class="py-3">Diseño Interior</h2>
                    <p style="padding: 1em;">La potencia y resistencia de <strong>RAM 1500</strong>, se complementan con la comodidad de un interior pensado en todo. Ofreciendo comodidad en exceso, e innovadoras características ergonómicas.</p>
                    
                    <h3 style="text-align: center;" class="py-2">Características:</h3>
                    <div class="interior-points">
                        <div class="container-slider">
                            <div id="interior-points">
                                <div>
                                    <p class="interior-point">
                                        <p style="padding: 1em;"><strong>Espacio para tres:</strong><br />
                                            en cabina delantera</p>
                                    </p>
                                </div>
                                <div>
                                    <p class="interior-point">
                                        <p style="padding: 1em;"><strong>Volante en cuero</strong><br />
                                            regulable en altura con controles de audio integrados</p>
                                    </p>
                                </div>
                                <div>
                                    <p class="interior-point">
                                        <p style="padding: 1em;"><strong>Climatizador</strong><br />
                                            de dos zonas</p>
                                    </p>
                                </div>
                                <div>
                                    <p class="interior-point">
                                        <p style="padding: 1em;"><strong>Radio Uconnect</strong><br />
                                            8.4", CarPlay, full conectividad</p>
                                    </p>
                                </div>
                                <div>
                                    <p class="interior-point">
                                        <p style="padding: 1em;"><strong>Cámara de visión trasera</strong><br />
                                            con sensores</p>
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
</div>