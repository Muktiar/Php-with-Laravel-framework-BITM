<?php
//var_dump($_POST);
//echo '<pre>';
//print_r($_FILES) ;
//echo '</pre>';
$approot=$_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/CRUD/';
//image files upload
$_file_name='img_'.time().'-' .$_FILES['picture']['name'];
$target=$_FILES["picture"]['tmp_name'];
$destination=$approot.'uploads/'.$_file_name;
$is_file_moved=move_uploaded_file($target,$destination);
if ($is_file_moved){
    $_picture=$_file_name;
    }
else{
    $_picture=null;
}
$_title=$_POST['title'];
$s_description=$_POST['s_description'];
$_description=$_POST['description'];
$_picture=$_file_name;
$product_type=$_POST['product_type'];
$mrp=$_POST['mrp'];
$total_sales=$_POST['total_sales'];
$status=$_POST['status'];
//echo $_title;


//Connect to Database.
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecom2", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//title	s_description	description	picture	product_type	mrp	total_sales	status
$query='INSERT INTO `products` (`title`,`s_description`,`description`,`picture`,`product_type`,`mrp`,`total_sales`,`status`) VALUES (:title,:s_description,:description,:picture,:product_type,:mrp,:total_sales,:status)';
$stmt=$conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':s_description',$s_description);
$stmt->bindParam(':description',$_description);
$stmt->bindParam(':picture',$_picture);
$stmt->bindParam(':product_type',$product_type);
$stmt->bindParam(':mrp',$mrp);
$stmt->bindParam(':total_sales',$total_sales);
$stmt->bindParam(':status',$status);
$result=$stmt->execute();
//var_dump($result);
header('location:index.php');
