<?php
echo '
<footer>
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-lg-8">
                        <div class="footer-column pull-left">
                            <h4>Customer Service</h4>
                            <ul class="links">
                                <li class="first"><a href="http://veritodemo3.magikthemes.com/index.php?route=information/contact">Contact Us</a></li>
                                <li><a href="http://veritodemo3.magikthemes.com/index.php?route=account/return/add">Returns</a></li>
                                <li><a href="http://veritodemo3.magikthemes.com/index.php?route=account/wishlist">Wish List</a></li>
                                <li><a href="http://veritodemo3.magikthemes.com/index.php?route=account/order">Order History</a></li>
                                <li><a href="http://veritodemo3.magikthemes.com/index.php?route=information/sitemap">Site Map</a></li>
                                <li class="last"><a href="http://veritodemo3.magikthemes.com/index.php?route=account/account" title="My Account">My Account</a></li>
                            </ul>
                        </div>
                        <div class="footer-column pull-left">
                            <h4>Extras</h4>
                            <ul class="links">
                                <li class="first"><a href="http://veritodemo3.magikthemes.com/index.php?route=product/manufacturer">Brands</a></li>
                                <li><a href="http://veritodemo3.magikthemes.com/index.php?route=account/voucher">Gift Certificates</a></li>
                                <li><a href="http://veritodemo3.magikthemes.com/index.php?route=affiliate/account">Affiliates</a></li>

                                <li><a href="http://veritodemo3.magikthemes.com/index.php?route=magikblog/article">Blog</a></li>

                                <li><a href="http://veritodemo3.magikthemes.com/index.php?route=account/order">Order History</a></li>
                                <li class="last"><a href="http://veritodemo3.magikthemes.com/index.php?route=product/special">Specials</a></li>
                            </ul>
                        </div>
                        <div class="footer-column pull-left">
                            <h4>Information</h4>
                            <ul class="links">
                                <li class="first"><a href="http://veritodemo3.magikthemes.com/index.php?route=information/information&amp;information_id=4">About Us</a></li>
                                <li class=""><a href="http://veritodemo3.magikthemes.com/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>
                                <li class=""><a href="http://veritodemo3.magikthemes.com/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
                                <li class=""><a href="http://veritodemo3.magikthemes.com/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
                                <li class=""><a href="http://veritodemo3.magikthemes.com/index.php?route=information/information&amp;information_id=7">Suppliers</a></li>
                                <li class=""><a href="http://veritodemo3.magikthemes.com/index.php?route=information/information&amp;information_id=8">Our Store</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="footer-column-last">

                            <div class="newsletter-wrap">
                                <h4>SIGN UP FOR EMAILS</h4>
                                <input  type="text" name="subscriber_email" id="subscriber_email" value="" placeholder="Enter Your Email" class="form-control input-text required-entry validate-email" />
                                <button class="subscribe" type="button" name="submit_newsletter" id="submit_newsletter" onclick="return MgkEmailValidation()" ><span>Subscribe</span></button>
                                <p id="subscriber_content" class="required"></p>

                                <script>
                                    function MgkEmailValidation(mail)
                                    {
                                        subscribemail = document.getElementById("subscriber_email").value;
                                        var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
                                        if (subscribemail != \'\') {

                                            if ( subscribemail.search(emailRegEx)!=-1 ) {


                                                email = document.getElementById("subscriber_email").value;
                                                var xmlhttp;
                                                if (window.XMLHttpRequest){
                                                    xmlhttp=new XMLHttpRequest();
                                                }else{
                                                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                                                }

                                                xmlhttp.onreadystatechange=function() {
                                                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                                                        document.getElementById("subscriber_content").innerHTML=xmlhttp.responseText;
                                                    }
                                                }
                                                xmlhttp.open("GET","index.php?route=extension/module/newslettersubscription/addsubscriberemail&email="+email,true);
                                                xmlhttp.send();
                                                return (true) ;
                                            }
                                            document.getElementById("subscriber_content").innerHTML="Please enter an email address.";
                                            return (false);
                                        }
                                        document.getElementById("subscriber_content").innerHTML="This is a required field.";
                                        return false;
                                    }
                                </script>                      </div>


                            <div class="social">
                                <h4>Follow Us</h4>
                                <ul>
                                    <li class="fb pull-left"><a href="http://facebook.com/Magikcommerce" target="_blank"></a></li>
                                    <li class="tw pull-left"><a href="http://twitter.com/qtwitt" target="_blank"></a></li>
                                    <li class="googleplus pull-left"><a href="http://www.magikcommerce.com/" target="_blank"></a></li>
                                    <li class="rss pull-left"><a href="http://blog.magikcommerce.com/feed/" target="_blank"></a></li>
                                    <li class="pintrest pull-left"><a href="http://www.pinterest.com/magikcommerce/" target="_blank"></a></li>
                                    <li class="linkedin pull-left"><a href="http://www.linkedin.com/company/magikcommerce" target="_blank"></a></li>
                                    <li class="youtube pull-left"><a href="https://plus.google.com/108548966199168316090/videos" target="_blank"></a></li>
                                </ul>
                            </div>
                            <div class="payment-accept">
                                <div>
                                    <img alt="payment1" src="catalog/view/theme/verito/image/payment-1.png">
                                    <img alt="payment2" src="catalog/view/theme/verito/image/payment-2.png">
                                    <img alt="payment3" src="catalog/view/theme/verito/image/payment-3.png">
                                    <img alt="payment4" src="catalog/view/theme/verito/image/payment-4.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div style="text-align:center"> <a href="#"><img src="catalog/view/theme/verito/image/footer-logo.png" alt="logo"> </a> </div>
                    <address>
                        <i class="fa fa-map-marker"></i>123 Main Street, Anytown, CA 12345  USA


                        <i class="fa fa-mobile"></i>
                        <span> +(408) 394-7557</span>


                        <i class="fa fa-envelope"></i><span>
                      abc@example.com</span>
                    </address>
                </div>
            </div>
        </div>
        }

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-xs-12 coppyright">© 2016 Magikcommerce. All Rights Reserved.</div>
                    <div class="col-sm-7 col-xs-12 company-links">
                        <ul class="links">
                            <li><a href="#" title="Magento Themes">Magento Themes</a> </li>
                            <li><a href="#" title="Premium Themes">Premium Themes</a> </li>
                            <li><a href="#" title="Responsive Themes">Responsive Themes</a> </li>
                            <li class="last"><a href="#" title="Magento Extensions">Magento Extensions</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
';?>