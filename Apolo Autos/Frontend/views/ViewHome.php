<style>
    .container-portada {
        background-image: url("./assets/image/carretera4k.png");
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;
        height: 640px;


    }

    .imagebb {

        background: url("./assets/image/50C.jpg");
        background-size: cover;
        background-position: center center;
        justify-content: center;





        height: 670px;
    }

    body {

        overflow-x: hidden;
    }

    

  

    

    

    h1.main,
    p.demos {
        -webkit-animation-delay: 18s;
        -moz-animation-delay: 18s;
        -ms-animation-delay: 18s;
        animation-delay: 18s;
    }

   

    

    .sp-container h2 {
        position: absolute;
        top: 50%;
        line-height: 100px;
        height: 90px;
        margin-top: -50px;
        font-size: 40px;
        width: 100%;
        text-align: center;
        color: transparent;
        -webkit-animation: blurFadeInOut 3s ease-in backwards;
        -moz-animation: blurFadeInOut 3s ease-in backwards;
        -ms-animation: blurFadeInOut 3s ease-in backwards;
        animation: blurFadeInOut 3s ease-in backwards;
    }
    

    .sp-container h2.frame-1 {
        -webkit-animation-delay: 0s;
        -moz-animation-delay: 0s;
        -ms-animation-delay: 0s;
        animation-delay: 0s;
    }

    .sp-container h2.frame-2 {
        -webkit-animation-delay: 3s;
        -moz-animation-delay: 3s;
        -ms-animation-delay: 3s;
        animation-delay: 3s;
    }


    .sp-container h2.frame-5 {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none;
        color: transparent;
        text-shadow: 0px 0px 1px #fff;
    }

    .sp-container h2.frame-5 span {
        -webkit-animation: blurFadeIn 3s ease-in 5s backwards;
        -moz-animation: blurFadeIn 1s ease-in 5s backwards;
        -ms-animation: blurFadeIn 3s ease-in 5s backwards;
        animation: blurFadeIn 3s ease-in 5s backwards;
        color: transparent;
        text-shadow: 0px 0px 1px #fff;
    }

    .sp-container h2.frame-5 span:nth-child(2) {
        -webkit-animation-delay: 5s;
        -moz-animation-delay: 5s;
        -ms-animation-delay: 5s;
        animation-delay: 5s;
    }

    .sp-container h2.frame-5 span:nth-child(3) {
        -webkit-animation-delay: 5s;
        -moz-animation-delay: 5s;
        -ms-animation-delay: 5s;
        animation-delay: 5s;
    }

   

    

    

    /**/

    @-webkit-keyframes blurFadeInOut {
        0% {
            opacity: 0;
            text-shadow: 0px 0px 40px #fff;
            -webkit-transform: scale(1.3);
        }

        20%,
        75% {
            opacity: 1;
            text-shadow: 0px 0px 1px #fff;
            -webkit-transform: scale(1);
        }

        100% {
            opacity: 0;
            text-shadow: 0px 0px 50px #fff;
            -webkit-transform: scale(0);
        }
    }

    @-webkit-keyframes blurFadeIn {
        0% {
            opacity: 0;
            text-shadow: 0px 0px 40px #fff;
            -webkit-transform: scale(1.3);
        }

        50% {
            opacity: 0.5;
            text-shadow: 0px 0px 10px #fff;
            -webkit-transform: scale(1.1);
        }

        100% {
            opacity: 1;
            text-shadow: 0px 0px 1px #fff;
            -webkit-transform: scale(1);
        }
    }

    @-webkit-keyframes fadeInBack {
        0% {
            opacity: 0;
            -webkit-transform: scale(0);
        }

        50% {
            opacity: 0.4;
            -webkit-transform: scale(2);
        }

        100% {
            opacity: 0.2;
            -webkit-transform: scale(5);
        }
    }

    @-webkit-keyframes fadeInRotate {
        0% {
            opacity: 0;
            -webkit-transform: scale(0) rotate(360deg);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1) rotate(0deg);
        }
    }

    /**/

    @-moz-keyframes blurFadeInOut {
        0% {
            opacity: 0;
            text-shadow: 0px 0px 40px #fff;
            -moz-transform: scale(1.3);
        }

        20%,
        75% {
            opacity: 1;
            text-shadow: 0px 0px 1px #fff;
            -moz-transform: scale(1);
        }

        100% {
            opacity: 0;
            text-shadow: 0px 0px 50px #fff;
            -moz-transform: scale(0);
        }
    }

    @-moz-keyframes blurFadeIn {
        0% {
            opacity: 0;
            text-shadow: 0px 0px 40px #fff;
            -moz-transform: scale(1.3);
        }

        100% {
            opacity: 1;
            text-shadow: 0px 0px 1px #fff;
            -moz-transform: scale(1);
        }
    }

    @-moz-keyframes fadeInBack {
        0% {
            opacity: 0;
            -moz-transform: scale(0);
        }

        50% {
            opacity: 0.4;
            -moz-transform: scale(2);
        }

        100% {
            opacity: 0.2;
            -moz-transform: scale(5);
        }
    }

    @-moz-keyframes fadeInRotate {
        0% {
            opacity: 0;
            -moz-transform: scale(0) rotate(360deg);
        }

        100% {
            opacity: 1;
            -moz-transform: scale(1) rotate(0deg);
        }
    }

    /**/

    @keyframes blurFadeInOut {
        0% {
            opacity: 0;
            text-shadow: 0px 0px 40px #fff;
            transform: scale(1.3);
        }

        20%,
        75% {
            opacity: 1;
            text-shadow: 0px 0px 1px #fff;
            transform: scale(1);
        }

        100% {
            opacity: 0;
            text-shadow: 0px 0px 50px #fff;
            transform: scale(0);
        }
    }

   
    @media screen and (max-width:800px){
         .frame-1  {
            margin-left: -15px;
            font-size: 20px !important ;
        }
        .frame-2  {
            margin-left: -15px;
            font-size: 19px !important ;
        }
        .frame-5  {
            margin-left: -15px;
            font-size: 20px !important ;
        }
    }
</style>
<link rel="stylesheet" href="./assets/css/portada.css">
<script>
    window.console = window.console || function(t) {};
</script>
<script>
    if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
    }
</script>
<div class="container-portada">
    <div class="row">
        <div class="col col-12 col-md-12">
            <div class="sp-container" st>
                <div class="sp-content">
                    <div class="sp-globe"></div>
                    <h2 class="frame-1">Bienvenido a Nuestra Pagina Web</h2>
                    <h2 class="frame-2">El Auto De Tus Sueños A Un Solo Click </h2>
                    <h2 class="frame-5">
                        <span>Bienvenido A</span>
                        <span>Nuestra Pagina Web</span>
                        
                    </h2>

                </div>
            </div>
            <div class="image">
                <img class="mercedes" src="./assets/image/mercedesHome.png" alt="">
                <img class="lambo" src="./assets/image/lamboHome.png" alt="">
            </div>



        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


<link rel="stylesheet" href="./assets/css/CardQuienesSomos.css" />
<link rel="stylesheet" href="./assets/css/TituloApolo.css" />

<h2 style="text-align: center; margin-top:130px; ">Bienvenido Al Sitio Web Compra/Venta</h2>
<div style="margin-top: 60px;" class="svg-wrapper">
    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
        <rect class="shape" height="60" width="320" />
        <div class="text">APOLO</div>




    </svg>

</div>

<div class="container">
    <div class="row">
        <div style="margin-top:-100px " class="col col-12">
            <div style="margin-top:40px" class="separator">
            </div>
            <p>La Pagina Web Esta Especializado En La Necesidad Del Cliente.El Tema De Esta Pagina Es Cumplir De Manera Segura Y Efectiva Sus Ventas O Compras.</p>
            <p>Nosotros No Compramos Autos Y Tampoco Vendemos, Nuestra Pagina Cumple Con La Disposicion Segun Sus Necesidades Para Que Pueda Publicar Sus Vehiculos. En Autos Nuevos Disponemos En Redirigir Las Ventas De Vehiculos A Las Paginas Oficiales.</p>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col col-12 col-md-4">

            <div class="card">
                <div style="background: #FF0404;" class="face face1">
                    <div class="content">
                        <div class="icon">
                            <i class="fa fa-fad fa-bullhorn" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <h3>
                            <a href="/Login.php" target="_blank">Publicar Mi Vehiculo</a>
                        </h3>
                        <p>!Puedes Publicar Tus Vehiculos Y Tener Posibilidades De Tener Un Cliente Mas Rapido! </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12 col-md-4">

            <div class="card">
                <div style="background: #ffc832 ;" class="face face1">
                    <div class="content">
                        <div class="icon">
                            <i class="fas fa-handshake" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <h3>
                            <a href="/Login.php" target="_blank">¿Deseas Nuestro Sistema?</a>
                        </h3>
                        <p>!Comunicate Con Nosotros A Nuestro Correo Para Poder Llegar A Un Acuerdo! </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col col-12 col-md-4">

            <div class="card">
                <div style="background: #020340;" class="face face1">
                    <div class="content">
                        <div class="icon">
                            <i class="fas fa-car" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <h3>
                            <a href="/Login.php" target="_blank">Vehiculos</a>
                        </h3>
                        <p>Los Acuerdos Y Negocios De La Venta De Cualquier Tipo De Vehiculo Se Consulta Con El Publicador, La Pagina No Vende Ningun Vehiculo. </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>

<div class="imagebb">

    <div class="container">
        <div class="faders">

        </div>

        <div class="items">

            <div style="margin-top: 150px;" class="entry">

                <div class="star-rating">
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                </div>

                <p class="name">Peugeot 2008 New</p>


                <img style="width:300px" src="./assets/image/peugeot2008.png" />
                <a href="https://www.peugeot.cl/gama/selecciona-tu-vehiculo/nuevo-suv-peugeot-2008.html" target="_blank"><img style="width:110px" src="./assets/image/Peugeot-logo.png" /></a>


            </div>
            <div style="margin-top: 150px;" class="entry">
                <div class="star-rating">
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                </div>

                <p class="name"> Hyundai Venue 2020 New</p>


                <img style="width:300px" src="./assets/image/New Project (1).png" />
                <a href="https://hyundai.cl/modelos/venue/46" target="_blank"><img style="width:110px" src="./assets/image/LogoHyundai.png" /></a>


            </div>
            <div style="margin-top: 150px;" class="entry">
                <div class="star-rating">
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                </div>

                <p class="name">All New Mazda CX-30</p>

                <img style="width:300px" src="./assets/image/mazda-cx-30-2020.jpg" />
                <a href="https://www.mazda.cl/auto/all-new-mazda-cx-30" target="_blank"><img style="width:70px" src="./assets/image/mazda-logo-1.png" /></a>

            </div>
            <div style="margin-top: 150px;" class="entry">
                <div class="star-rating">
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                </div>

                <p class="name">All New Onix Sedan</p>


                <img style="width:300px" src="./assets/image/onixSedan.jpg" />
                <a href="https://www.chevrolet.cl/autos/nuevo-onix-sedan" target="_blank"><img style="width:114px" src="./assets/image/ChevrtoletLogo.jpg" /></a>


            </div>
            <div style="margin-top: 150px;" class="entry">
                <div class="star-rating">
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                    <a style="color: #f39c12;">&#9733;</a>
                </div>

                <p class="name">MG ZS</p>


                <img style="width:300px" src="./assets/image/mgZs.png" />
                <a href="https://www.mgmotor.cl/modelos/mg-zs/" target="_blank"><img style="width:90px" src="./assets/image/mglogo.png" /></a>


            </div>
            <div class="entry">
                <p class="name">John Doe</p>
                <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Smiling person" />
                <p class="quote">"Man, I think this app freaking rocks and stuff. Dude."</p>
            </div>
            <div class="entry">
                <p class="name">John Doe</p>
                <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Smiling person" />
                <p class="quote">"Man, I think this app freaking rocks and stuff. Dude."</p>
            </div>
            <div class="entry">
                <p class="name">John Doe</p>
                <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Smiling person" />
                <p class="quote">"Man, I think this app freaking rocks and stuff. Dude."</p>
            </div>
        </div>
    </div>


</div>
<hr>
<link rel="stylesheet" href="./assets/css/video.css">


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
<div class="container celular">
    <div class="row">
        <div class="col col-12 col-md-12">
            <div class="container-fluid" style="margin-left: 30px;">
                <div class="video-text" style="background-color:#F6F4F1 ; margin-left:-200px !important;">
                    <h3 class="h3-text">¿Por que Publicar Tu Vehiculo Con Nosotros?</h3>
                    <hr>
                    <h5 class="h5-text"><img src="./assets/image/chacke.png" style="width: 20px;">Tendras Tu Propia Cuenta De Usuario Para Poder Publicar Tus Vehiculos.</h5>
                    <h5 class="h5-text"><img src="./assets/image/chacke.png" style="width: 20px;">!Podras Ver Tus Publicaciones Premium De Manera Mas Destacada Posible!.</h5>
                    <h5 class="h5-text"><img src="./assets/image/chacke.png" style="width: 20px;">Cada Publicacion Que Se Ingrese A La Pagina Se Verificara. Si Es Veridico Se Publica.</h5>
                    <h5 class="h5-text"><img src="./assets/image/chacke.png" style="width: 20px;">!Tus Publicaciones Premium Tendra Recomendacion De 5 Estrellas Y Mucho Mas!.</h5>


                </div>
            </div>



        </div>
        <div class="col col-12 col-md-12">
            <img src="./assets/image/Fondos-de-Pantalla-de-Autos-Deportivos-para-Celular-4k-y-HD-550x765.jpg" class="imagen-info" alt="">
            <a href="youtube.com"><i class="fas fa-play"></i></a>
        </div>
    </div>

</div>



<style>

</style>

<!------ Include the above in your HEAD tag ---------->
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
<link rel="stylesheet" href="./assets/css/Youtube.css">
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