<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <style>
        .product-slider-section {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .product-slider-section .carousel-inner {
            cursor: crosshair;
        }

        .product-slider-section .carousel-indicators {
            overflow-y: hidden;
            overflow-x: auto;
        }

        .product-slider-section .carousel-indicators li {
            border: 2px solid transparent;
            cursor: pointer;
            float: left;
            height: auto;
            margin: 10px 0 12px 0;
            padding: 5px;
            text-align: center;
            text-indent: unset;
            width: 185px;
        }

        .product-slider-section .carousel-indicators li.active {
            border: 2px solid #ddd;
        }

        .product-slider-section .carousel-indicators li .data-slide-image {
            width: 100px;
            margin: 0 auto;
        }

        @media screen and (max-width:767px) {
            .product-name {
                margin-top: 30px;
            }
        }

        .price {
            margin: 20px 0;
            font-size: 20px;
        }

        .old-price {
            color: #777;
            margin-right: 10px;
            text-decoration: line-through;
            padding: 5px;

        }

        .new-price {
            background-color: #21a4fb;
            color: #fff;
            padding: 5px;
        }

        .sale-span {
            background-color: #21a4fb;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            position: absolute;
            padding: 4px 10px;
            right: -30px;
            text-align: center;
            top: 4px;
            transform: rotate(45deg);
            width: 110px;

        }

        .add-to-cart-btn {
            border: none;
            display: block;
            text-align: center;
            cursor: pointer;
            text-transform: uppercase;
            outline: none;
            overflow: hidden;
            position: relative;
            color: #fff;
            font-weight: 700;
            font-size: 15px;
            background-color: #222;
            padding: 17px 60px;
            margin: 0 auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.20);
        }

        .add-to-cart-btn span {
            position: relative;
            z-index: 1;
        }

        .add-to-cart-btn::after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 490%;
            width: 140%;
            background-color: #21a4fb;
            color: #fff;
            transition: all .5s ease-in-out;
            transform: translateX(-98%) translateY(-25%) rotate(45deg);
        }

        .add-to-cart-btn:hover:after {
            transform: translateX(-9%) translateY(-25%) rotate(45deg);

        }
    </style>
    <section class="product-slider-section" style="margin-top: 500px;">
        <div class="container">
            <div id="productslider" class="carousel slide">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="carousel-inner">

                                    <div class="carousel-item active zoom-image">
                                        <img src="./assets/image/SedanCard.jpg" class="img-fluid" alt="">
                                        <span class="sale-span">sale</span>
                                    </div>

                                    <div class="carousel-item  zoom-image">
                                        <img src="./assets/image/Venue.jpg" class="img-fluid" alt="">
                                        <span class="sale-span">sale</span>
                                    </div>


                                    <div class="carousel-item  zoom-image">
                                        <img src="./assets/image/usado1.jpg" class="img-fluid" alt="">
                                        <span class="sale-span">sale</span>
                                    </div>

                                    <div class="carousel-item  zoom-image">
                                        <img src="./assets/image/usado2.jpg" class="img-fluid" alt="">
                                        <span class="sale-span">sale</span>
                                    </div>

                                    <div class="carousel-item  zoom-image">
                                        <img src="./assets/image/usado3.jpg" class="img-fluid" alt="">
                                        <span class="sale-span">sale</span>
                                    </div>

                                    <div class="carousel-item  zoom-image">
                                        <img src="./assets/image/usado4.jpg" class="img-fluid" alt="">
                                        <span class="sale-span">sale</span>
                                    </div>
                                    <div class="carousel-item  zoom-image">
                                        <img src="./assets/image/usado5.jpg" class="img-fluid" alt="">
                                        <span class="sale-span">sale</span>
                                    </div>


                                </div>
                            </div>
                            <div class="col-12">
                                <ol class="carousel-indicators position-static m-0 justify-content-start">
                                    <li data-target="#productslider" data-slide-to="0" class="active">
                                        <div class="data-slide-image">
                                            <img src="./assets/image/SedanCard.jpg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li data-target="#productslider" data-slide-to="1" >
                                        <div class="data-slide-image">
                                            <img src="./assets/image/Venue.jpg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li data-target="#productslider" data-slide-to="2" >
                                        <div class="data-slide-image">
                                            <img src="./assets/image/usado1.jpg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li data-target="#productslider" data-slide-to="3" >
                                        <div class="data-slide-image">
                                            <img src="./assets/image/usado2.jpg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li data-target="#productslider" data-slide-to="4" >
                                        <div class="data-slide-image">
                                            <img src="./assets/image/usado3.jpg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li data-target="#productslider" data-slide-to="5" >
                                        <div class="data-slide-image">
                                            <img src="./assets/image/usado4.jpg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li data-target="#productslider" data-slide-to="6" >
                                        <div class="data-slide-image">
                                            <img src="./assets/image/usado5.jpg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                   
                                   



                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h3 class="product-name">product name</h3>
                        <p class="price">
                            <span class="old-price">$20.00</span>
                            <span class="new-price">$15.00</span>
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum perspiciatis, totam harum itaque beatae aliquid. Dolorem nam distinctio totam neque nemo, corporis similique sapiente assumenda consequuntur qui aliquid optio ea?

                        </p>
                        <div class="d-flex">
                            <button class="add-to-cart-btn">
                                <span>add to cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
    <script>
        $(function() {
            $('.zoom-image').each(function() {
                var originalImagePath = $(this).find('img').data('original-image');
                $(this).zoom({
                    url: originalImagePath,
                    magnify: 1
                });
            });
        });
    </script>

</body>

</html>