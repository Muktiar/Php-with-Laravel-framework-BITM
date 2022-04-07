<?php

namespace Bitm;

use PDO;


class Banner{


public $id=null;
public $title=null;
public $description=null;
public $picture=null;
public $is_active=null;
public $created_at=null;
public $modified_at=null;
public $is_deleted=null;



    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";


        $this->conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
// set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function index(){
        $query="SELECT * FROM `banners` WHERE is_deleted=0";
        $stmt=$this->conn->prepare($query);
        $result=$stmt->execute();
        $banners= $stmt->fetchAll();
        return $banners;
    }

    public function store(){

        $approot=$_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/';
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
//Y-M-D h-m-s
        $_title=$_POST['title'];
        $_description=$_POST['description'];
//$_picture=$_file_name;
        date_default_timezone_set('ASIA/DHAKA');
        $_created_at=date("Y-m-d h-i-s",time());

        if (array_key_exists('is_active',$_POST)){
            $_is_active=$_POST['is_active'];
        }else{
            $_is_active=0;
        }

//echo $_title;


//Connect to Database.

        $query='INSERT INTO `banners` (`title`,`description`,`picture`,`is_active`,`created_at`) VALUES (:title,:description,:picture,:is_active,:created_at)';
        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(':title',$_title);
        $stmt->bindParam(':description',$_description);
        $stmt->bindParam(':picture',$_picture);
        $stmt->bindParam(':is_active',$_is_active);
        $stmt->bindParam(':created_at',$_created_at);
        $result=$stmt->execute();
//var_dump($result);
        header('location:index.php');


    }
    public function show(){
        $webroot='http://localhost/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/';
        $_id=$_GET['id'];



        $query="SELECT * FROM `banners` WHERE id=:id";
        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result=$stmt->execute();
        $banner= $stmt->fetch();
        return $banner;
    }
    public function edit(){
        $webroot='http://localhost/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/';

        $_id=$_GET['id'];



        $query="SELECT * FROM `banners` WHERE id=:id";
        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result=$stmt->execute();
        $banner= $stmt->fetch();
        return $banner;
    }

    public function update(){
        $approot=$_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/';
//image files upload
        if ($_FILES['picture']['name']!=''){
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
        }
        else{
            $_picture=$_POST['old_picture'];

        }

        date_default_timezone_set('ASIA/DHAKA');
        $_modified_at=date("Y-m-d h-i-s",time());


        $_id=$_GET['id'];
//var_dump($_POST);


        $_title=$_POST['title'];
        $_description=$_POST['description'];

        if (array_key_exists('is_active',$_POST)){
            $_is_active=$_POST['is_active'];
        }else{
            $_is_active=0;
        }
//echo $_title;


//Connect to Database.

        $query='UPDATE `banners` SET `title` = :title, `description` = :description,`picture` = :picture,`is_active` = :is_active ,`modified_at`=:modified_at WHERE `banners`.`id` = :id';
        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':title',$_title);
        $stmt->bindParam(':description',$_description);
        $stmt->bindParam(':picture',$_picture);
        $stmt->bindParam(':is_active',$_is_active);

        $stmt->bindParam(':modified_at',$_modified_at);

        $result=$stmt->execute();
//var_dump($result);
        header('location:index.php');
    }
public function trash(){
    $_id=$_GET['id'];
    $_is_deleted =1;




    $query='UPDATE `banners` SET `is_deleted` = :is_deleted WHERE `banners`.`id` = :id';
    $stmt=$this->conn->prepare($query);
    $stmt->bindParam(':id',$_id);

    $stmt->bindParam(':is_deleted',$_is_deleted);
    $result=$stmt->execute();

    header('location:trash_index.php');
}

public function trash_index(){

    $query="SELECT * FROM `banners` WHERE is_deleted=1";
    $stmt=$this->conn->prepare($query);
    $result=$stmt->execute();
    $banners= $stmt->fetchAll();
    return $banners;
}
public  function restore(){
    $_id=$_GET['id'];
    $_is_deleted =0;




    $query='UPDATE `banners` SET `is_deleted` = :is_deleted WHERE `banners`.`id` = :id';
    $stmt=$this->conn->prepare($query);
    $stmt->bindParam(':id',$_id);

    $stmt->bindParam(':is_deleted',$_is_deleted);
    $result=$stmt->execute();
//echo '<br>';
////echo '<pre>';
////print_r($banners);
////echo '</pre>';
////var_dump($result);
//
////foreach ($banners as $banner):
////
////endforeach;
    header('location:trash_index.php');
}
public function delete(){
    $_id=$_GET['id'];



    $query="DELETE FROM banners WHERE `banners`.`id` = :id ";
    $stmt=$this->conn->prepare($query);
    $stmt->bindParam(':id',$_id);
    $result=$stmt->execute();
    echo '<br>';
//echo '<pre>';
//print_r($banners);
//echo '</pre>';
    var_dump($result);

//foreach ($banners as $banner):
//
//endforeach;
    header('location:index.php');
}

    public function uploads()
    { $approot=$_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/';
        if ($_FILES['picture']['name']!=''){
            $_file_name='img_'.time().'-' .$_FILES['picture']['name'];
            $target=$_FILES["picture"]['tmp_name'];
            $destination=$approot.'uploads/'.$_file_name;
            $is_file_moved=move_uploaded_file($target,$destination);
            if ($is_file_moved){
                $_picture=$_file_name;
            }

        }
        else{
            if ($_POST['old_picture']){
                $_picture=$_POST['old_picture'];

            }
        }
        return $_picture;
    }

    public function getActivebanners(){
        $_stratform=0;
        $_total=3;
        $query="SELECT * FROM `banners` WHERE is_deleted=1 LIMIT $_stratform,$_total;";
        $stmt=$this->conn->prepare($query);
        $result=$stmt->execute();
        $banners= $stmt->fetchAll();
        return $banners;
        header('location:index.php');
    }













}
?>