<!DOCTYPE html>
<html lang="en">

<?php
include_once ('../views/elements/head.php');
?>

<body>
   <?php
   include_once ('../views/elements/header.php');
   ?>
    <!-- Main Navbar  -->
    <div class="sticky-top ">
        <nav class="navigation navbar navbar-expand-lg navbar-light shadow py-lg-0 py-md-2 py-xm-3">
            <div class="container">
                <a class="navbar-brand" onclick="scrollToTop()">
                    <img src="./img/logoAndFavicon/logo.png" alt="Emily" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item me-lg-3 py-lg-3 active">
                            <a class="nav-link" href="./index.html" onclick="scrollToTop()"
                                style="cursor: pointer;">HOME</a>
                        </li>

                        <!-- Dropdown Men  -->
                        <li class="nav-item dropdown me-lg-3 py-lg-3">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown1" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                MEN
                            </a>
                            <ul class="dropdown-menu nested-menu" aria-labelledby="navbarDropdown1">
                                <div class="row">
                                    <div class="col-6">
                                        <li><a class="dropdown-item" href="products.php">BLAZERS</a></li>
                                        <li><a class="dropdown-item" href="products.php">JACKETS</a></li>
                                        <li><a class="dropdown-item" href="products.php">T-SHIRT</a></li>
                                        <li><a class="dropdown-item" href="products.php">JEANS PANTS</a></li>
                                        <li><a class="dropdown-item" href="products.php">SPORTS SHOES</a></li>
                                        <li><a class="dropdown-item" href="products.php">SUN GLASS</a></li>
                                    </div>
                                    <div class="col-6 nested-img ">
                                        <a href="product-details.php" target="_blank" rel="noopener noreferrer">
                                            <img src="./img/modals/adModelMan1.jpg" alt=""
                                                class="img-fluid nested-imgOne ">
                                        </a>
                                        <a href="product-details.php" target="_blank" rel="noopener noreferrer">
                                            <img src="./img/modals/adModelMan2.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </li>

                        <!-- Dropdown Women  -->
                        <li class="nav-item dropdown me-lg-3 py-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                WOMEN
                            </a>
                            <ul class="dropdown-menu nested-menu" aria-labelledby="navbarDropdown2">
                                <div class="row">
                                    <div class="col-6">
                                        <li><a class="dropdown-item" href="products.php">SHARI</a></li>
                                        <li><a class="dropdown-item" href="products.php">BORKHA</a></li>
                                        <li><a class="dropdown-item" href="products.php">HIJAB</a></li>
                                        <li><a class="dropdown-item" href="products.php">SUN GLASS</a></li>
                                        <li><a class="dropdown-item" href="products.php">BAG</a></li>
                                        <li><a class="dropdown-item" href="products.php">SUN GLASS</a></li>
                                    </div>
                                    <div class="col-6 nested-img ">
                                        <a href="product-details.php" target="_blank" rel="noopener noreferrer">
                                            <img src="./img/carousel/carousel2.jpg" alt="female1"
                                                class="img-fluid nested-imgOne ">
                                        </a>
                                        <a href="product-details.php" target="_blank" rel="noopener noreferrer">
                                            <img src="./img/carousel/carousel3.jpg" alt="female2" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </li>

                        <!-- Dropdown Kid  -->
                        <li class="nav-item dropdown me-lg-3 py-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                KID
                            </a>
                            <ul class="dropdown-menu nested-menu nested-menu-kid" aria-labelledby="navbarDropdown">
                                <div class="row">
                                    <div class="col-6">
                                        <li><a class="dropdown-item" href="products.php">Baby Shirt</a></li>
                                        <li><a class="dropdown-item" href="products.php">Short Pants</a></li>
                                        <li><a class="dropdown-item" href="products.php">Show</a></li>
                                        <li><a class="dropdown-item" href="products.php">School Bag</a></li>
                                        <li><a class="dropdown-item" href="products.php">Dyper</a></li>
                                        <li><a class="dropdown-item" href="products.php">Baby Pants</a></li>
                                    </div>
                                    <div class="col-6 nested-img ">
                                        <a href="product-details.php" target="_blank" rel="noopener noreferrer">
                                            <img src="./img/modals/adModelKids1.jpg" alt="kid1"
                                                class="img-fluid nested-imgOne ">
                                        </a>
                                        <a href="product-details.php" target="_blank" rel="noopener noreferrer">
                                            <img src="./img/modals/adModelKids2.jpg" alt="kid2" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </li>


                        <li class="nav-item me-lg-3 py-lg-3">
                            <a class="nav-link" href="products.php" target="_blank"
                               rel="noopener noreferrer">ACCESSORIES</a>
                        </li>
                        <li class="nav-item me-lg-3 py-lg-3">
                            <a class="nav-link" href="#blogs">BLOG</a>
                        </li>
                        <li class="nav-item me-lg-3 py-lg-3">
                            <a class="nav-link" href="./contact-us.html" target="_blank"
                                rel="noopener noreferrer">CONTACT
                                US</a>
                        </li>
                        <li class="search nav-item py-4 px-lg-3 border-start border-4 ">
                            <i class="fas fa-search"></i>
                        </li>
                        <!-- Search Box -->
                        <div class="search-section">
                            <div class="search-box">
                                <div class="search-input">
                                    <input type="search" placeholder="Search..." class="input-textarea">
                                </div>
                            </div>
                        </div>
                        <li class="cartButtonClass nav-item py-4 px-lg-3 border-start border-end border-4">
                            <button id="cartButton" type="button" class="btn position-relative ">
                                <i class="fab fa-opencart"></i>
                                <span class="position-absolute  rounded-pill translate-middle badge ">
                                    <span id="cartCounter">0</span>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--BREADCRUMB NAVBAR Done By Tani -->
    <nav class="navbar navbar-expand-lg py-md-3" id="body">
        <div class="container">
            <section>
                <h2>Accessories</h2>
                <ul class="breadcrumb">
                    <li><a href="./index.html">Home</a></li>
                    <li>Accessories</li>
                </ul>
            </section>
        </div>
    </nav>
    <!--BREADCRUMB NAVBAR END By-->


    <div class="container">
        <div class="row py-5">
            <?php
            include_once ('../views/elements/sidebar.php');
            ?>
            <!-- ALL COL-9  CONTENT START FROM HERE -->
            <?php
            include_once ('../views/elements/carousel.php');
            ?>

            <!-- ALL COL-9  CONTENT ENDS HERE -->

        </div>
    </div>


    <!-- Explore -->
    <section class="explore  py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="explore-caption py-3 text-center">
                        <h2>Explore and Find the Fashion <span>You Love</span>. Dont't "Miss" Your Life!</h2>
                        <p>'Look for passion and love with Emily store'</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="explore-button text-center">
            <a href="https://github.com/SyedMonir/emily-fashion-store" class="bttn"><span>discover</span></a>
            <a href="products.php" class="bttn"><span>shop now</span></a>
        </div>

    </section>

    <!-- information section start -->
    <!-- <section class="information-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <h5>INFORMATION</h5>
                    <p>About Us</p>
                    <p>Delivery Information</p>
                    <p>Privacy Policy</p>
                    <p>Terms & Conditions</p>
                    <p>Services</p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5>CUSTOMER</h5>
                    <p>Search Terms</p>
                    <p>Advanced Search</p>
                    <p>Order and Returns</p>
                    <p><a href="./contact-us.html">Contact Us</a></p>
                    <p>Return Policy</p>
                </div>
                <div class="col-lg-2 col-md-6 mt-md-2">
                    <h5>OUR ACCOUNT</h5>
                    <p>My Account</p>
                    <p>Order and Returns</p>
                    <p>Site Map</p>
                    <p>Search Terms</p>
                    <p>Advanced Search</p>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-2 contact-us">
                    <h5>CONTACT US</h5>

                    <p><span><i class="fas fa-home"></i></span> No. 1972 Charlington Gates, Liberty, Susperndis
                        Mettis, New York</p>
                    <p><span><i class="fas fa-envelope"></i></span> contact@emily.com</p>
                    <p><span><i class="fas fa-phone-square-alt"></i></span> (+84) 988 881 628</p>
                    <p><span><i class="fas fa-fax"></i></span> 0433 558 1259</p>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-2">
                    <h5>TWITTER</h5>
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="./img/logoAndFavicon/tplsolution.png" alt="TPS-Solution" height="110px"
                                width="110px">
                        </div>
                        <div class="col-lg-7">
                            <p>TPS Solution</p>
                            <p>@tplsolution</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- information section end -->
    <!-- 
    <footer>
        <section class="footer-section py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <p>&copy; 2022 Emily Fashion Store Store. All Rights Received. Designed by Emily Team</p>
                        <p class="display-6">
                            <span class="launch" data-target="#staticBackdrop" data-toggle="modal"><i
                                    class=" fab fa-cc-paypal"></i></span>
                            <span class="launch" data-target="#staticBackdrop" data-toggle="modal"><i
                                    class="fab fa-cc-visa"></i></span>
                            <span class="launch" data-target="#staticBackdrop" data-toggle="modal"><i
                                    class="fab fa-cc-mastercard"></i></span>
                            <span class="launch" data-target="#staticBackdrop" data-toggle="modal"><i
                                    class="fas fa-credit-card"></i></span>
                        </p>
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i>
                                        </div>
                                        <div class="tabs mt-3">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation"> <a class="nav-link active"
                                                        id="visa-tab" data-toggle="tab" href="#visa" role="tab"
                                                        aria-controls="visa" aria-selected="true"> <img
                                                            src="https://i.imgur.com/sB4jftM.png" width="80"> </a> </li>
                                                <li class="nav-item" role="presentation"> <a class="nav-link"
                                                        id="paypal-tab" data-toggle="tab" href="#paypal" role="tab"
                                                        aria-controls="paypal" aria-selected="false"> <img
                                                            src="https://i.imgur.com/yK7EDD1.png" width="80"> </a> </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="visa" role="tabpanel"
                                                    aria-labelledby="visa-tab">
                                                    <div class="mt-4 mx-4">
                                                        <div class="text-center">
                                                            <h5>Credit card</h5>
                                                        </div>
                                                        <div class="form mt-3">
                                                            <div class="inputbox"> <input type="text" name="name"
                                                                    class="form-control" required="required">
                                                                <span>Cardholder Name</span>
                                                            </div>
                                                            <div class="inputbox"> <input type="text" name="name"
                                                                    min="1" max="999" class="form-control"
                                                                    required="required">
                                                                <span>Card Number</span> <i class="fa fa-eye"></i>
                                                            </div>
                                                            <div class="d-flex flex-row">
                                                                <div class="inputbox"> <input type="text" name="name"
                                                                        min="1" max="999" class="form-control"
                                                                        required="required"> <span>Expiration
                                                                        Date</span> </div>
                                                                <div class="inputbox"> <input type="text" name="name"
                                                                        min="1" max="999" class="form-control"
                                                                        required="required"> <span>CVV</span> </div>
                                                            </div>
                                                            <div class="px-5 pay"> <button
                                                                    class="btn btn-success btn-block">Add card</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="paypal" role="tabpanel"
                                                    aria-labelledby="paypal-tab">
                                                    <div class="px-5 mt-5">
                                                        <div class="inputbox"> <input type="text" name="name"
                                                                class="form-control" required="required"> <span>Paypal
                                                                Email Address</span> </div>
                                                        <div class="pay px-5"> <button
                                                                class="btn btn-primary btn-block">Add
                                                                paypal</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <h5>NEWSLETTER</h5>
                        <P>Sign up for our newsletter</P>
                    </div>
                    <div class="col-lg-4 input-fild">
                        <input type="email" class="form-control my-4" name="email" id="email"
                            placeholder="Enter email here" required>
                        <div><a href="https://www.gmail.com/" target="blank"><i class="fas fa-envelope"></i></a></div>
                    </div>
                </div>
            </div>
        </section>
    </footer> -->


    <!-- footer section -->
   <?php
   include_once ('../views/elements/footer.php');
   ?>
</body>



<!-- Scroll To Top -->
<div class="container position-relative">
    <div id="scrollToTopBtn" class="scrollToTop text-center zIndex">
        <p class="my-1" onclick="scrollToTop()">
            <i class="fa-solid fa-angle-up"></i>
        </p>
    </div>
</div>


<!-- Chat Box  -->
<section>
    <div id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>

        <i class="fa-solid fa-message"></i> &nbsp; Messages
    </div>

    <div class="chat-box">
        <div class="chat-box-header">
            EMILY - FASHION STORE
            <span class="chat-box-toggle"> <i class="fa-solid fa-xmark"></i> </span>
        </div>
        <div class="chat-box-body">
            <div class="chat-box-overlay">
            </div>
            <div class="chat-logs">

            </div>
            <!--chat-log -->
        </div>
        <div class="chat-input">
            <form>
                <input type="text" id="chat-input" placeholder="Send a message..." />
                <button type="submit" class="chat-submit" id="chat-submit">
                    <!-- <i class="material-icons">send</i> -->
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Bootstrap JS  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<!-- <script src="./js/bootstrap.bundle.min.js"></script> -->

<!-- Main Js  -->
<script src="./js/product.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script>
    let myCarousel1 = document.querySelector('.carousel')
    let carousel = new bootstrap.Carousel(myCarousel1, {
        interval: 2000,
        wrap: true
    });

    // Quote
    // let quoteCarosul = document.querySelector('#quote-carousel')
    // let carousel1 = new bootstrap.Carousel(quoteCarosul, {
    //     interval: 1000,
    //     wrap: true
    // });
</script>






<script>
    const list = document.querySelector(".list");
    const grid = document.querySelector(".grid");
    const ltg = document.querySelector(".ltg");
    const card = document.querySelectorAll(".card");

    list.addEventListener("click", () => {
        ltg.classList.add("list");

    })

    grid.addEventListener("click", () => {
        ltg.classList.remove("list");
    })

</script>

<!--  -->

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script> -->


</html>