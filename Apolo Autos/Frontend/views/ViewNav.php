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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>

<body>
    <style>
        .btn-link:hover {
            text-decoration: none !important;
            color: red !important;
            animation: bouncy 5s infinite linear;
            position: relative;

        }


        /*/hr.solid {
            border-top: 3px solid #fff;
            z-index: 2000;


        }*/

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
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col col-12 col-md-12">
                <nav class="navbar navbar-expand-lg navbar2 ">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars" style="font-size: 25px;"></i></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                        </ul>
                        <div class="form-style">
                            <form class="form-inline my-2 my-lg-0">

                                <div class="fas fa-home" style="color:white"></div>
                                <a href="/index.php" class="btn btn-link text-white ml-1">Home</a>


                                <div class="fas fa-gem" style="color:white"></div>
                                <a href="/BusquedaPremium.php" class="btn btn-link text-white ml-1">Publicaciones Premium</a>

                                <div class="fas fa-car" style="color:white"></div>
                                <a href="/BuscarAuto.php" class="btn btn-link text-white ml-1">Publicaciones De Vehiculos</a>

                                <div class="far fa-address-card" style="color:white"></div>
                                <a href="/SobreNosotros.php" class="btn btn-link text-white ml-1 ">Sobre Nosotros</a>

                                <?php if (!isset($_SESSION['LOGEADO'])) { ?>
                                    <div class="fa fa-lock" style="color:white"></div>
                                    <a href="/Login.php" class="btn btn-link text-white ml-1">Iniciar Sesion</a>

                                <?php } else { ?>

                                    <a href="/index.php" class="btn btn-link text-white ml-1"><i class="fas fa-home"></i>Mi Cuenta</a>
                                    <a href="/Logout.php" class="btn btn-link text-white ml-1"><i class="fas fa-home"></i>Cerrar Sesion</a>
                                <?php } ?>
                            </form>
                        </div>

                    </div>

                </nav>

                <nav class="navbar navbar-expand-lg navbar1 ">






                </nav>
            </div>
        </div>
    </div>