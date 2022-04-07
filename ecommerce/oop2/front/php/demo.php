<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/Admin/Banners/config.php');



use Bitm\Banner;
$banner=new banner();
$banners=$banner->getActivebanners();
var_dump( $banners);

?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<?php
include_once ('element/head.php');
?>
<body class="common-home ">
<div id="page">
    <?php
    include_once ('element/header.php');
    ?>

    <?php
    include_once ('element/navbar.php');
    ?>
    <?php
    include_once ('element/content.php')
    ?>
    <?php
    include_once ('element/feature_box.php');
    ?>
    <?php
    include_once ('element/brand_logo.php');
    ?><!-- brand-logo -->
    <?php
    include_once ('element/footer.php');
    ?>
</div> <!-- page id -->
<?php
include_once ('element/mobile_menu.php');
?><!-- mobile-menu -->
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->

</body></html>