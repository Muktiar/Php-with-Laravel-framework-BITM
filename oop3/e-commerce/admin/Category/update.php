<?php
include_once ($_SERVER['DOCUMENT_ROOT']."/e-commerce/config.php");


use Bitm\Categories;

$_category = new Categories();

$_category->update();
