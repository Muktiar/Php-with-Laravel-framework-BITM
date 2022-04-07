<?php
$approot=$_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/';

$webroot="http://localhost/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/";

include_once ($approot.'vendor/autoload.php');

use Bitm\Pages;
$page=new Pages();
$pages=$page->store();
