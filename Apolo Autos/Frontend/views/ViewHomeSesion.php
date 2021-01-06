<?php
require_once("./model/Config.php");
$db = new Config;
require_once("./model/UsuariosModel.php");

$usuarios = $db->Con->query("SELECT * FROM usuarios WHERE idusuario =$_SESSION[IDUSUARIO]");
$dataUsuario = $usuarios->fetch_assoc();
?>
<link rel="stylesheet" href="./assets/css/QuienesSomos/Timeline.css">

<style>
    

    .container-portada {
        background-image: url("./assets/image/wallpaper.png");
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
        overflow-x: hidden;
    }

    .shape {
        stroke-dasharray: 140 540;
        stroke-dashoffset: -474;
        stroke-width: 8px;
        fill: transparent;
        stroke: #4d72e9;
        border-bottom: 5px solid black;
        transition: stroke-width 1s, stroke-dashoffset 1s, stroke-dasharray 1s;
    }

    .text {
        text-align: center;
        font-family: 'Roboto Condensed';
        font-size: 22px;
        line-height: 32px;

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

<div style="margin-top: 60px;" class="svg-wrapper">
    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
        <rect class="shape" height="60" width="320" />
        <div class="text">Bienvenido <?php echo $dataUsuario['nombre']; ?></div>




    </svg>

</div>
<div class="container">
    <div class="row">
        <div class="col col-12 col-md-6">
            <div class="blog-card">
                <div class="meta">
                    <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
                    
                </div>

                <div class="description">
                    <h1>Bienvenido A Tu Cuenta Personal</h1>
                    <h2>Visualiza Y Disfruta Tus Publicaciones</h2>
                    <p> En Tu Cuenta Personal Contaras Con Tus Publicaciones, Planes Premium, Publicar Mi Vehiculo, Mi Cuenta, El Inicio.</p>

                </div>
            </div>


        </div>
        <div class="col col-12 col-md-6">
            <div class="blog-card alt">
                <div class="meta">
                    <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)"></div>
                    
                </div>
                <div class="description">
                    <h1>Mastering the Language</h1>
                    <h2>Java is not the same as JavaScript</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /*PEN STYLES*/


    .blog-card {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        margin: 1rem auto;
        box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.6%;
        background: #fff;
        line-height: 1.4;
        font-family: sans-serif;
        border-radius: 5px;
        overflow: hidden;
        z-index: 0;
    }

    .blog-card a {
        color: inherit;
    }

    .blog-card a:hover {
        color: #5ad67d;
    }

    .blog-card:hover .photo {
        -webkit-transform: scale(1.3) rotate(3deg);
        transform: scale(1.3) rotate(3deg);
    }

    .blog-card .meta {
        position: relative;
        z-index: 0;
        height: 200px;
    }

    .blog-card .photo {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-size: cover;
        background-position: center;
        -webkit-transition: -webkit-transform .2s;
        transition: -webkit-transform .2s;
        transition: transform .2s;
        transition: transform .2s, -webkit-transform .2s;
    }

    .blog-card .details,
    .blog-card .details ul {
        margin: auto;
        padding: 0;
        list-style: none;
    }

    .blog-card .details {
        position: absolute;
        top: 0;
        bottom: 0;
        left: -100%;
        margin: auto;
        -webkit-transition: left .2s;
        transition: left .2s;
        background: rgba(0, 0, 0, 0.6);
        color: #fff;
        padding: 10px;
        width: 100%;
        font-size: .9rem;
    }

    .blog-card .details a {
        -webkit-text-decoration: dotted underline;
        text-decoration: dotted underline;
    }

    .blog-card .details ul li {
        display: inline-block;
    }

    .blog-card .details .author:before {
        font-family: FontAwesome;
        margin-right: 10px;
        content: "\f007";
    }

    .blog-card .details .date:before {
        font-family: FontAwesome;
        margin-right: 10px;
        content: "\f133";
    }

    .blog-card .details .tags ul:before {
        font-family: FontAwesome;
        content: "\f02b";
        margin-right: 10px;
    }

    .blog-card .details .tags li {
        margin-right: 2px;
    }

    .blog-card .details .tags li:first-child {
        margin-left: -4px;
    }

    .blog-card .description {
        padding: 1rem;
        background: #fff;
        position: relative;
        z-index: 1;
    }

    .blog-card .description h1,
    .blog-card .description h2 {
        font-family: Poppins, sans-serif;
    }

    .blog-card .description h1 {
        line-height: 1;
        margin: 0;
        font-size: 1.7rem;
    }

    .blog-card .description h2 {
        font-size: 1rem;
        font-weight: 300;
        text-transform: uppercase;
        color: #a2a2a2;
        margin-top: 5px;
    }

    .blog-card .description .read-more {
        text-align: right;
    }

    .blog-card .description .read-more a {
        color: #5ad67d;
        display: inline-block;
        position: relative;
    }

    .blog-card .description .read-more a:after {
        content: "\f061";
        font-family: FontAwesome;
        margin-left: -10px;
        opacity: 0;
        vertical-align: middle;
        -webkit-transition: margin .3s, opacity .3s;
        transition: margin .3s, opacity .3s;
    }

    .blog-card .description .read-more a:hover:after {
        margin-left: 5px;
        opacity: 1;
    }

    .blog-card p {
        position: relative;
        margin: 1rem 0 0;
    }

    .blog-card p:first-of-type {
        margin-top: 1.25rem;
    }

    .blog-card p:first-of-type:before {
        content: "";
        position: absolute;
        height: 5px;
        background: #5ad67d;
        width: 35px;
        top: -0.75rem;
        border-radius: 3px;
    }

    .blog-card:hover .details {
        left: 0%;
    }

    @media (min-width: 640px) {
        .blog-card {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
            max-width: 700px;
        }

        .blog-card .meta {
            flex-basis: 40%;
            height: auto;
        }

        .blog-card .description {
            flex-basis: 60%;
        }

        .blog-card .description:before {
            -webkit-transform: skewX(-3deg);
            transform: skewX(-3deg);
            content: "";
            background: #fff;
            width: 30px;
            position: absolute;
            left: -10px;
            top: 0;
            bottom: 0;
            z-index: -1;
        }

        .blog-card.alt {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: reverse;
            flex-direction: row-reverse;
        }

        .blog-card.alt .description:before {
            left: inherit;
            right: -10px;
            -webkit-transform: skew(3deg);
            transform: skew(3deg);
        }

        .blog-card.alt .details {
            padding-left: 25px;
        }
    }
</style>
<section id=timeline>
    <h1>Especialidades</h1>
    <p class="leader">Publica Tu Vehiculo A Un Solo Click</p>
    <div class="demo-card-wrapper">
        <div class="demo-card demo-card--step1">
            <div class="head">
                <div class="number-box">
                    <span>01</span>
                </div>
                <h2><span class="small">Publicacion</span> Descripcion</h2>
            </div>
            <div class="body">
                <p> Podras Visualizar Tus Publicaciones Premium De Manera Mas Profesional Posible, Contamos Con La Mejor Intencion De Poder Lograr Satisfacer Tus Necesidades Como Usuario </p>
                <img style="object-fit:cover; max-height:225px !important;" src="./assets/image/wallpaper.png" alt="Graphic">
            </div>
        </div>

        <div class="demo-card demo-card--step4">
            <div class="head">
                <div class="number-box">
                    <span>02</span>
                </div>
                <h2><span class="small">Premium</span> Descripcion</h2>
            </div>
            <div class="body">
                <p>Las Publicaciones Premium Se Podra Vizualisar De Una Manera Mas Profesional Y Mas Satisfactoria Para La Vista De Cualquier Persona. Las Vista Premium <strong>NO</strong> Es Igual A Las Publicaciones Gratuitas.</p>
                <img style="object-fit:cover; max-height:225px !important;" src="./assets/image/O72HCC0.jpg" alt="Graphic">
            </div>
        </div>

        <div class="demo-card demo-card--step3">
            <div class="head">
                <div class="number-box">
                    <span>03</span>
                </div>
                <h2><span class="small">Pagina Web</span> Descripcion</h2>
            </div>
            <div class="body">
                <p>Nuestra Pagina Web Esta En Venta. Para Poder Saber Nuestro Precio Y Lo Que Se Exije Para Hacer Negocios Se Consulta En Nuestro Correo Personal De La Venta De Esta Pagina Web.</p>
                <img style="object-fit:cover; max-height:225px !important;" src="./assets/image/ram1500card.jpg" alt="Graphic">
            </div>
        </div>
        <div class="demo-card demo-card--step2">
            <div class="head">
                <div class="number-box">
                    <span>04</span>
                </div>
                <h2><span class="small">Subtitle</span> Confidence</h2>
            </div>
            <div class="body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                <img src="http://placehold.it/1000x500" alt="Graphic">
            </div>
        </div>


        <div class="demo-card demo-card--step5">
            <div class="head">
                <div class="number-box">
                    <span>05</span>
                </div>
                <h2><span class="small">Subtitle</span> Conversion</h2>
            </div>
            <div class="body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                <img src="http://placehold.it/1000x500" alt="Graphic">
            </div>
        </div>

    </div>
</section>
<style>
    @media screen and (min-width:800px) {
        .celular {
            display: none;
        }

        .pc {
            display: block
        }
    }

    @media screen and (max-width:800px) {
        .celular {
            display: block;
        }

        .pc {
            display: none;
        }
    }
</style>
<link rel="stylesheet" href="./assets/css/Youtube.css">
<style>
    #MiCarousel {
        margin-top: 30px;
        margin-bottom: 30px;
        -webkit-box-shadow: 10px 10px 38px -13px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 38px -13px rgba(0, 0, 0, 0.75);
        box-shadow: 10px 10px 38px -13px rgba(0, 0, 0, 0.75);
    }

    .carousel-img {
        background-color: #000;
        color: #fff;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 2;
        -webkit-clip-path: polygon(0 0, 96% 0, 100% 100%, 0% 100%);
        clip-path: polygon(0 0, 90% 0, 100% 100%, 0% 100%);
        opacity: 0.8;
    }

    .div-r {
        padding: 40px;
    }

    .carousel-title {
        font-size: 80px;
        font-weight: bold;
        margin-left: 20px;
        margin-top: 20px;
    }

    .carousel-pagination {
        background-color: #000 !important;
        width: 15px !important;
        height: 15px !important;
        border-radius: 100%;
        position: relative;
        bottom: -50px;
        opacity: 0.5;
    }

    .carousel-pagination.active {
        opacity: 1;
    }

    .carousel-controls {
        display: none;
    }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="main pc">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-12 col-md-12">
                <div id="MiCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6 div-l">
                                    <div class="carousel-img" style="background-image: url(./assets/image/Fondos-de-Pantalla-de-Autos-Deportivos-para-Celular-4k-y-HD-550x765.jpg);">

                                        <a id="play-video" class="video-play-button" href="#"> <span></span></a>
                                    </div>
                                </div>
                                <div class="col-md-6 div-r">
                                    <h3>¿Por que Publicar Tu Vehiculo Con Nosotros?</h3>
                                    <hr>
                                    <p><img src="./assets/image/chacke.png" style="width: 20px;">Tendras Tu Propia Cuenta De Usuario Para Poder Publicar Tus Vehiculos.</p>
                                    <p><img src="./assets/image/chacke.png" style="width: 20px;">!Podras Ver Tus Publicaciones Premium De Manera Mas Destacada Posible!.</p>
                                    <p><img src="./assets/image/chacke.png" style="width: 20px;">Cada Publicacion Que Se Ingrese A La Pagina Se Verificara. Si Es Veridico Se Publica.</p>
                                    <p><img src="./assets/image/chacke.png" style="width: 20px;">!Tus Publicaciones Premium Tendra Recomendacion De 5 Estrellas Y Mucho Mas!.</p>
                                    <p><img src="./assets/image/chacke.png" style="width: 20px;">!Pagina Activa 24HR!.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
