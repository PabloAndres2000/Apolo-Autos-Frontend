<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fb1566b385.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

</head>

<body>
    <style>
        .btn-link1:hover {
            text-decoration: none !important;
            color: red !important;
            animation: bouncy 5s infinite linear;
            position: relative;

        }


        hr.solid {
            border-top: 3px solid #fff;
            z-index: 2000;


        }

        .navbar1 {
            background: rgba(0, 0, 0, 0);
            margin-bottom: -400px;
            z-index: 1000;

        }

        .navbar2 {

            background: rgba(0, 0, 0, 0);
            border-bottom: 1px solid #fff;

            z-index: 1000;
        }

        @media screen and (max-width:800px) {
            nav button form {
                width: 80%;
                height: 100%;
                margin: 0;
                text-align: center;


            }

            .navbar-toggler-icon {
                display: block;
                padding: 20px;
                color: #fff;

            }
        }
    </style>


    <div class="col col-12 ">
        <nav class="navbar navbar-expand-lg navbar2 ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">Menu</span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>
                <form class="form-inline my-2 my-lg-0">



                    <?php if (!isset($_SESSION['LOGEADO'])) { ?>
                        <div class="fa fa-lock"></div>
                        <a href="/Login.php" class="btn btn-link1 text-white ml-1">Iniciar Sesion</a>

                    <?php } else { ?>
                        <a href="/HomeSesion.php" class="btn btn-link1 text-white ml-1"><i class="fas fa-home"></i>Inicio</a>
                        <a href="/MisPublicaciones.php" class="btn btn-link1 text-white ml-1"><i class="fas fa-car"></i>Mis Publicaciones</a>

                        <a href="/PublicarAuto.php" class="btn btn-link1 text-white ml-1"><i class="fas fa-bullhorn"></i>Publicar Auto</a>

                        <a href="/Premium.php" class="btn btn-link1 text-white ml-1"><i class="fas fa-gem"></i>Premium</a>
                        <a href="/CuentaUsuario.php" class="btn btn-link1 text-white ml-1"><i class="fas fa-user-circle"></i>Mi Cuenta</a>

                        <a href="/Logout.php" class="btn btn-link1 text-white ml-1"><i class="fas fa-power-off"></i>Cerrar Sesion</a>
                        <a href="/FormPremium.php" class="btn btn-link1 text-white ml-1"><i class="fas fa-power-off"></i>ppp</a>
                        <a href="/experimentando.php" class="btn btn-link1 text-white ml-1"><i class="fas fa-power-off"></i>gg</a>
                    <?php } ?>
                </form>
            </div>

        </nav>

        <nav class="navbar navbar-expand-lg navbar1 ">






        </nav>
    </div>