<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/Admin/Banners/config.php');

use Bitm\Banner;
$banner=new banner();
$banners=$banner->delete();
?>