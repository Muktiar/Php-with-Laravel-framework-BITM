<?php
//var_dump($_POST);

$_title=$_POST['title'];
$_link=$_POST['link'];
$_is_draft=$_POST['is_draft'];
$_is_active=$_POST['is_active'];
$_soft_delete=$_POST['soft_delete'];
$_created_at=$_POST['created_at'];
$_modified_at=$_POST['modified_at'];
//echo $_title;


//Connect to Database.
$servername = "localhost";
$username = "root";
$password = "";
//id	title	link	is_draft	is_active	soft_delete	created_at	modified_at	


$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query='INSERT INTO `brands` (`title`,`link`,`is_draft`,`is_active`,`soft_delete`,`created_at`,`modified_at`) VALUES (:title,:link,:is_draft,:is_active,:soft_delete,:created_at,:modified_at)';
$stmt=$conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':link',$_link);
$stmt->bindParam(':is_draft',$_is_draft);
$stmt->bindParam(':is_active',$_is_active);
$stmt->bindParam(':soft_delete',$_soft_delete);
$stmt->bindParam(':created_at',$_created_at);
$stmt->bindParam(':modified_at',$_modified_at);
$result=$stmt->execute();
var_dump($result);
