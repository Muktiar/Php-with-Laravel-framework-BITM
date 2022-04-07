<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/oop3/Admin/Banners/config.php');



use Bitm\Banner;
$banner=new banner();
$banners=$banner->index();
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <!--custom CSS -->
    <link href="css/style.css" rel="stylesheet" >

    <title>Ecommerce-Site</title>
</head>
<body>
<header>
    <div class="top-header">
        <div class="container">
            <div class="d-sm-none d-md-block ">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col">
                                <div class="language">
                                    <select class="form-select" aria-label="Default select example">

                                        <option value="english">Enlish</option>
                                        <option value="bengali">Bengali</option>
                                        <option value="french">French</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="language">
                                    <select class="form-select" aria-label="Default select example">

                                        <option value="usd">USD</option>
                                        <option value="bdt">BDT</option>
                                        <option value="usd">EURO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="wc-message">
                                    Welcome Vistors!
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-5 offset-3">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link"  href="#"><i class="fa-solid fa-user"></i>My Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-heart"></i>My Wishlist</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-circle-check"></i>Checkout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-comments"></i>Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-lock"></i>login</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-block d-md-none ">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col">
                                <div class="language">
                                    <select class="form-select" aria-label="Default select example">

                                        <option value="english">Enlish</option>
                                        <option value="bengali">Bengali</option>
                                        <option value="french">French</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="language">
                                    <select class="form-select" aria-label="Default select example">

                                        <option value="usd">USD</option>
                                        <option value="bdt">BDT</option>
                                        <option value="usd">EURO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="wc-message">
                                    Welcome Vistors!
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-5 offset-3">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link"  href="#"><i class="fa-solid fa-user"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-heart"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-circle-check"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-comments"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-lock"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/b-logo1-130x50.png" alt="" width="40" height="20">
                </a>



            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"> <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LIVING ROOM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DINING & BAR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BEDROOM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">KITCHEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME IMPROVEMENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CUSTOM</a>
                </li>


            </ul>
            </div>
        </div>
    </nav>




</header>
<div id="mycarousel1" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mycarousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#mycarousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#mycarousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/slide-44-1920x600.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/slide-11-1920x600.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slide-22-1920x600.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mycarousel1" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mycarousel1" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--mark up best seller-->
<section id="best-seller">
    <div class="container">
       <h2><strong>Best</strong>-Seller</h2>

        <div class="row row-cols-1 row-cols-md-4 g-2 text-center" >
            <div class="col">
                <div class="card">
                    <a href="#"> <img src="images/product12-700x850.jpg" class="card-img-top" alt="Best-Product" title="Grandpa Rocking Chair"></a>
                    <div class="card-body">
                        <a href="#"><h6 class="card-title">GRANDPA ROCKING CHAIR</h6></a>
                        <p class="card-text">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        <p class="price">$100</p>
                        <button type="button" class="btn btn-outline-danger">Add to Cart</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                   <a href="#"> <img src="images/product16-700x850.jpg" class="card-img-top" alt="Best-Product" title="Nitraa Lydon dinning table set with chair"></a>
                    <div class="card-body">
                        <a href=""> <h6 class="card-title">NITRAA LYDON DINING TABLE SET WITH CHAIR</h6></a>
                        <p class="card-text">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        <p class="price">$100</p>
                        <button type="button" class="btn btn-outline-danger">Add to Cart</button>

                        </p>



                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#"> <img src="images/product24-700x850.jpg" class="card-img-top" alt="Best-Product" title="table lamp in steam beach wood"></a>
                    <div class="card-body">
                        <a href=""> <h6 class="card-title">TABLE LAMP IN STEAM BEACH WOOD</h6></a>
                        <p class="card-text">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        <p class="price">$100</p>
                        <button type="button" class="btn btn-outline-danger">Add to Cart</button>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#">  <img src="images/product6-700x850.jpg" class="card-img-top" alt="Best-Product" title="decoration floating wall shelf"></a>

                    <div class="card-body">
                        <a href=""><h6 class="card-title">DECORNATION FLOATING WALL SHELF</h6></a>
                        <p class="card-text">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        <p class="price"><del>$100</del> $80</p>
                        <button type="button" class="btn btn-outline-danger">Add to Cart</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="js/bootstrap.bundle.min.js" ></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
<script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: true
    })
</script>
</body>
</html>
