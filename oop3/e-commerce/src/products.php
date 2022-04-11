<?php


namespace Bitm;

use PDO;
class products
{
    public $id = null;
    public $title = null;
    public $conn = null;


    public function __construct()
    {
        //Connect to database
        $servername = "localhost";
        $username = "root";
        $password = "";

        $this->conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function store(){
        $approot = $_SERVER['DOCUMENT_ROOT']."/muktiar/Php-with-Laravel-framework-BITM/oop3/e-commerce/";
//Working with image

        $file_name = "IMG_".time() ."-". $_FILES['picture']['name'];

        $target = $_FILES['picture']['tmp_name'];

        $destination = $approot.'uploads/'.$file_name;


        $is_file_moved = move_uploaded_file($target, $destination);

        if($is_file_moved){
            $_picture = $file_name;
        }else{
            $_picture = null;
        }
// Y-m-d h-i-s
        $_title = $_POST['title'];
        $_detail = $_POST['detail'];
//date_default_timezone_set('ASIA/DHAKA');
        $_created_at = date("Y-m-d h-i-s", time());

        if(array_key_exists('is_active', $_POST)){
            $_is_active = $_POST['is_active'];
        }else{
            $_is_active = 0;
        }


        $query = "INSERT INTO `products` (`title`,`detail`, `picture`, `is_active`, `created_at`) VALUES (:title,:detail ,:picture, :is_active, :created_at)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':detail', $_detail);
        $stmt->bindParam(':picture', $_picture);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':created_at', $_created_at);
        $result = $stmt->execute();
        header('location:index.php');
    }


    public function index(){

        $query = "SELECT * FROM `products` WHERE is_deleted = 0";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }

    public function getActiveproducts(){
        $_startFrom = 0;
        $_total = 3;

        $query = "SELECT * FROM `products` WHERE is_active = 1 LIMIT $_startFrom, $_total";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }




    public function show(){
        $webroot = "http://localhost/muktiar/Php-with-Laravel-framework-BITM/oop3/e-commerce/";
        $_id = $_GET['id'];



        $query = "SELECT * FROM `products` WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $result = $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }

    public function edit(){
        $_id = $_GET['id'];


        $query = "SELECT * FROM `products` WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $result = $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }

    public function update(){
        $approot = $_SERVER['DOCUMENT_ROOT']."/muktiar/Php-with-Laravel-framework-BITM/oop3/e-commerce/";
//Working with image
        if($_FILES['picture']['name'] != ""){
            $file_name = "IMG_".time() ."-". $_FILES['picture']['name'];
            $target = $_FILES['picture']['tmp_name'];
            $destination = $approot.'uploads/'. $file_name;

            $is_file_moved = move_uploaded_file($target, $destination);

            if($is_file_moved){
                $_picture = $file_name;
            }else{
                $_picture = null;
            }
        }else{
            $_picture = $_POST['old_picture'];
        }


        $_id = $_POST['id'];
        $_title = $_POST['title'];
        $_modified_at = date("Y-m-d h-i-s", time());
        if(array_key_exists('is_active', $_POST)){
            $_is_active = $_POST['is_active'];
        }else{
            $_is_active = 0;
        }


        $query = "UPDATE `products` SET `title` = :title, `picture` = :picture, `is_active` = :is_active, `modified_at` = :modified_at WHERE `products`.`id` = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':picture', $_picture);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':modified_at', $_modified_at);
        $result = $stmt->execute();
        header('location:index.php');

    }

    public function delete(){
        $_id = $_GET['id'];

        $query = "DELETE FROM products WHERE `products`.`id` = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $result = $stmt->execute();

//var_dump($result);

        header('location:index.php');
    }
}