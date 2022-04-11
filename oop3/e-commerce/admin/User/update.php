<?php
include_once ($_SERVER['DOCUMENT_ROOT']."/muktiar/Php-with-Laravel-framework-BITM/oop3/e-commerce/config.php");

use Bitm\users;

$_user = new users();
$_user->update();
