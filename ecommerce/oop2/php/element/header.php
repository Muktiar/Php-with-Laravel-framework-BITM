<?php
echo '
   <header>
        <div class="header-container">
            <div class="header-top">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-6">
                            <div class="dropdown block-language-wrapper">
                                <form action="http://veritodemo3.magikthemes.com/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="language">



                                    <a href="#" title="English" class="block-language dropdown-toggle" data-target="#" data-toggle="dropdown" role="button"> <img alt="English" src="catalog/language/en-gb/en-gb.png"> English <span class="caret"></span> </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li role="presentation">
                                            <a href="en-gb"><img src="catalog/language/en-gb/en-gb.png" alt="English" title="English" /> English</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="nl-nl"><img src="catalog/language/nl-nl/nl-nl.png" alt="Nederlands" title="Nederlands" /> Nederlands</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="ru-ru"><img src="catalog/language/ru-ru/ru-ru.png" alt="Русский" title="Русский" /> Русский</a>
                                        </li>
                                    </ul>

                                    <input type="hidden" name="code" value="" />
                                    <input type="hidden" name="redirect" value="http://veritodemo3.magikthemes.com/index.php?route=common/home" />
                                </form>
                            </div>
                            <div class="dropdown block-currency-wrapper">
                                <form action="http://veritodemo3.magikthemes.com/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="currency">

                                    <a class="block-currency dropdown-toggle" href="#" data-target="#" data-toggle="dropdown" role="button">
                                        USD<span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li role="presentation">
                                            <a href="#" data-target="#" class="currency-select" name="EUR">€ - EUR        </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#" data-target="#" class="currency-select" name="GBP">£ - GBP        </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#" data-target="#" class="currency-select" name="USD">$ - USD        </a>
                                        </li>
                                    </ul>

                                    <input type="hidden" name="code" value="" />
                                    <input type="hidden" name="redirect" value="http://veritodemo3.magikthemes.com/index.php?route=common/home" />
                                </form>
                            </div>
                            <div class="welcome-msg">
                                Welcome visitor!
                            </div>
                        </div>

                        <div class="col-xs-6 hidden-xs">
                            <div class="toplinks">
                                <div class="links">
                                    <div class="myaccount"><a href="http://veritodemo3.magikthemes.com/index.php?route=account/account" title="My Account"> <img src="catalog/view/theme/verito/image/my-account.png" alt="my account icon"><span class="hidden-xs">My Account</span></a></div>

                                    <div class="wishlist"><a href="http://veritodemo3.magikthemes.com/index.php?route=account/wishlist" title="My Wishlist" ><img src="catalog/view/theme/verito/image/wishlist.png" alt="wishlist"><span class="hidden-xs">My Wishlist</span></a> </div>

                                    <div class="check"><a href="http://veritodemo3.magikthemes.com/index.php?route=checkout/checkout" title="Checkout"><img src="catalog/view/theme/verito/image/checkout.png" alt="checkout"><span class="hidden-xs">Checkout</span></a></div>
                                    <div class="demo"> <a title="Blog" href="http://veritodemo3.magikthemes.com/index.php?route=magikblog/article"><img src="catalog/view/theme/verito/image/blog.png" alt="blog"><span class="hidden-xs">Blog</span></a></div>
                                    <div class="login">                        <a href="http://veritodemo3.magikthemes.com/index.php?route=account/login"><img src="catalog/view/theme/verito/image/log-in.png" alt="login"><span class="hidden-xs">Login</span></a>

                                    </div>

                                </div>
                            </div>
                            <!-- End Header Top Links -->
                        </div>
                    </div>

                </div>
            </div><!-- end header top -->



            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 logo-block">
                        <!-- Header Logo -->
                        <div class="logo">  <a href="http://veritodemo3.magikthemes.com/index.php?route=common/home" title="Veritodemo3">
                            <img src="http://veritodemo3.magikthemes.com/image/catalog/logo.png" title="Veritodemo3" alt="Veritodemo3"/>
                        </a></div>
                    </div>
                    <div class="col-lg-7 col-md-5 col-sm-6 col-xs-12 hidden-xs search-wrapper">
                        <!-- search col -->
                        <div class="search-box">
                            <div id="search_mini_form">
                                <input type="text" name="search" value="" placeholder="Search" class="searchbox" id="search" autocomplete="off"/>
                                <button id="submit-button-search-header" type="button" class="btn btn-default search-btn-bg"><span class="glyphicon glyphicon-search"></span></button>
                            </div>
                        </div>
                        <!-- search col -->

                        <!-- Header Company -->
                        <div class="block-company-wrapper">
                            <ul class="block-company-inner">

                                <li role="presentation"><a href="http://veritodemo3.magikthemes.com/index.php?route=information/information&amp;information_id=4">About Us</a></li>
                                <li role="presentation"><a href="http://veritodemo3.magikthemes.com/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>
                                <li role="presentation"><a href="http://veritodemo3.magikthemes.com/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!-- End Header Company -->
                    </div>




                    <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12 top-cart-wrapper">
                        <div class="top-cart-contain  pull-right" >
                            <!-- Top Cart -->
                            <div class="mini-cart">
                                <div id="cart">
                                    <div data-hover="dropdown" class="basket dropdown-toggle"> <a href="http://veritodemo3.magikthemes.com/index.php?route=checkout/cart"> <img class="cart-icon" alt="" src="catalog/view/theme/verito/image/btn-cart.png"><span class="cart_count">0</span> <span class="price hidden-xs">Cart / $0.00</span> </a> </div>
                                    <input id="cart-txt-heading" type="hidden" name="cart-txt-heading" value="Cart ">
                                    <ul class="dropdown-menu pull-right top-cart-content arrow_box">
                                        <li>
                                            <p class="text-center noitem">Your shopping cart is empty!</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Top Cart -->
                            <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                                <input value="" type="hidden">
                                <input id="enable_module" value="1" type="hidden">
                                <input class="effect_to_cart" value="1" type="hidden">
                                <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end header cointainer -->
    </header>
';
?>