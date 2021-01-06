<style>
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
        letter-spacing: 4px;
        color: rgb(0, 0, 0);
        top: -48px;
        position: relative;
    }

    .svg-wrapper:hover .shape {
        stroke-width: 2px;
        stroke-dashoffset: 0;
        stroke-dasharray: 760;
    }

    body {
        overflow-x: hidden;
    }
</style>
<div style="background: url(./assets/image/publicarauto.png); margin-top:-230px;padding: 700px 0px 100px 0px; overflow:hidden !important;  background-size: cover; background-position:center center; ">
    <div class="row">
        <div class="col col-12">


        </div>
    </div>
</div>

<div style="margin-top:80px" class="svg-wrapper">
    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
        <rect class="shape" height="60" width="320" />
        <div class="text">Publicar Mi Vehiculo</div>




    </svg>

</div>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }


    .container-card {
        width: 100%;
        display: flex;
        max-width: 1100px;
        margin: auto;
    }

    .title-cards {
        width: 100%;
        max-width: 1080px;
        margin: auto;
        padding: 20px;
        margin-top: 20px;
        text-align: center;
        color: #7a7a7a;
    }

    .card {
        width: 100%;
        margin: 20px;
        border-radius: 6px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
        transition: all 400ms ease-out;
        cursor: default;
    }

    .card:hover {
        box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
        transform: translateY(-3%);
    }

    .card img {
        width: 100%;
        height: 210px;
    }

    .card .contenido-card {
        padding: 15px;
        text-align: center;
    }

    .card .contenido-card h3 {
        margin-bottom: 15px;
        color: #7a7a7a;
    }

    .card .contenido-card p {
        line-height: 1.8;
        color: #6a6a6a;
        font-size: 14px;
        margin-bottom: 5px;
    }

    .card .contenido-card a {
        display: inline-block;
        padding: 10px;
        margin-top: 10px;
        text-decoration: none;
        color: #2fb4cc;
        border: 1px solid #2fb4cc;
        border-radius: 4px;
        transition: all 400ms ease;
        margin-bottom: 5px;
    }

    .card .contenido-card a:hover {
        background: #2fb4cc;
        color: #fff;
    }

    @media only screen and (min-width:320px) and (max-width:768px) {
        .container-card {
            flex-wrap: wrap;
        }

        .card {
            margin: 15px;
        }
    }

    .sobre {
        position: absolute;
        top: 0px;
        left: 0px;
        border: none;
        margin-top: 180px;
        width: 30px !important;
        height: 30px !important;
    }
</style>

</style>
<div class="title-cards">
    <h2>!Selecciona Tu Categoria!</h2>
</div>
<div class="container-card">

    <div class="card">
        <figure>
            <img src="./assets/image/fordRaptorCard.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Camioneta</h3>
            <p>!Seleccionaras La Categoria Camioneta!</p>
            <a href="/Camioneta.php">Seleccionar</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="./assets/image/Fondos-de-pantalla-4k-coches.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Deportivo</h3>
            <p>!Seleccionaras La Categoria Deportivo!</p>
            <a href="/Deportivo.php">Leer Màs</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="./assets/image/hatchbackCard.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Hatchback</h3>
            <p>!Seleccionaras La Categoria Hatchback!</p>
            <a href="/Hatchback.php">Seleccionar</a>
        </div>
    </div>

</div>
<div class="container-card">

    <div class="card">
        <figure>
            <img src="./assets/image/3ZmzMF.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Suv</h3>
            <p>!Seleccionaras La Categoria Suv!</p>
            <a href="/Suv.php">Seleccionar</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="./assets/image/SedanCard.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Sedan</h3>
            <p>!Seleccionaras La Categoria Sedan!</p>
            <a href="/Seda.php">Seleccionar</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="./assets/image/thumb2-renault-trafic-van-4k-offroad-2019-cars-minibus.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Furgon</h3>
            <p>!Seleccionaras La Categoria Furgon!</p>
            <a href="/Furgon.php">Seleccionar</a>
        </div>
    </div>

</div>