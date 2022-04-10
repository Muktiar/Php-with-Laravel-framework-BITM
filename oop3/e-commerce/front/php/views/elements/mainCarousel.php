<?php
use Bitm\Banners;

$_banner = new Banners();
$banners = $_banner->getActiveBanners();
//var_dump($banners);
?>


<section id="mainCarousel">
    <div id="carouselExampleFade" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $_active = "active";
            foreach ($banners as $banner):
            ?>

            <div class="carousel-item <?=$_active;?>">
                <a href="./product-details.html" target="_blank" rel="noopener noreferrer">
                    <img src="<?=$webroot?>uploads/<?=$banner['picture'];?>" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h3>This Autumn</h3>
                    <h4>COLLECTION</h4>
                    <h2>FASHION STREET <span>2022</span></h2>
                    <h5>25 World Famous Brands</h5>
                    <div class="wrapper">
                        <a class="cta" href="./products.html" target="_blank" rel="noopener noreferrer">
                            <span class="ps-2 mt-1 mb-1">SHOP NOW</span>
                            <span>
                                        <svg width="60px" height="30px" viewBox="0 0 66 43" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="arrow" stroke="none" stroke-width="1" fill="none"
                                               fill-rule="evenodd">
                                                <path class="one"
                                                      d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                      fill="#FFFFFF"></path>
                                                <path class="two"
                                                      d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                      fill="#FFFFFF"></path>
                                                <path class="three"
                                                      d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                      fill="#FFFFFF"></path>
                                            </g>
                                        </svg>
                                    </span>
                        </a>
                    </div>
                </div>
            </div>

            <?php
            $_active = '';
            endforeach;
            ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="container my-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center ">
            <div class="support-img">
                <i class="fas fa-paper-plane"></i>
            </div>
            <div class="support-text ms-3">
                <h4>Free Shipping</h4>
                <p>Apply for larger order $200</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center my-sm-3 my-3">
            <div class="support-img">
                <i class="fab fa-btc px-1"></i>
            </div>
            <div class="support-text ms-3">
                <h4>100% Money Back</h4>
                <p>Charisma is the moto of our work</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center mx-md-auto">
            <div class="support-img">
                <i class="fas fa-phone-alt"></i>
            </div>
            <div class="support-text ms-3 ">
                <h4>Support 24/7</h4>
                <p><a href="tel:+8801988-512131">+8801988-512131</a></p>
            </div>
        </div>
    </div>
</section>