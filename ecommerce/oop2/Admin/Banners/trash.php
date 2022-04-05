<?php


$approot=$_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/';

$webroot="http://localhost/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/";

include_once ($approot.'vendor/autoload.php');

use Bitm\Banner;
$banner=new banner();
$banners=$banner->trash();
?>