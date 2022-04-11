<?php
use Bitm\products;

$_product = new products();
$products = $_product->getActiveproducts();
//var_dump($banners);
?>

<section id="newArrival" class="new-arrival-section pb-5">
    <div class="container">
        <!-- New Arrival Title  -->
        <div class="row ">

            <div class="col">
                <div class="titles">
                    <h2 class="text-uppercase">New Arrival</h2>
                </div>
            </div>
        </div>
        <!-- New Arrival slider -->

        <div class="row ">

            <div class="new-arrival mt-3 <?=$_active;?>">

                <div class="col-mt-3">
                    <?php
                    $_active = "active";
                    foreach ($products as $product):
                    ?>
                    <div class="slider-item">
                        <div class="img-box ">
                            <a href="./product-details.html" target="_blank" rel="noopener noreferrer">
                                <img src="<?=$webroot?>uploads/<?=$product['picture'];?>" class="img-fluid" alt="Cfg Armani Black">
                            </a>
                            <span class="new">New</span>
                            <span class="discount">-31%</span>
                            <span class="wish-icon"> <i class="far fa-heart"></i> </span>
                            <span> <i class="cartCount fab fa-opencart"></i> </span>
                        </div>
                        <div class="slider-content">
                            <h4><?=$product['title'];?></h4>
                            <p class="item-price"> <del>$400</del> <span>$369.00</span></p>
                            <label class="rating-label">
                                <input class="rating rating--nojs" max="5" step="1" type="range" value="1">
                            </label>
                        </div>
                    </div>
                        <?php
                        $_active = '';
                    endforeach;
                    ?>
                </div>


            </div>

        </div>

    </div>
</section>
