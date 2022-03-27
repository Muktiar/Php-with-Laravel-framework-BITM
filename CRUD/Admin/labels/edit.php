<?php
<<<<<<< HEAD

$get = $_GET['id'];
// Connect to database
=======
$_id = $_GET['id'];
>>>>>>> 5aa01343f82136f90e7534f447cdf249e01868e5
$servername = "localhost";
$username = "root";
$password = "";

<<<<<<< HEAD
$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "SELECT * FROM `labels` where `id`=$get"; 

$stmt = $conn->prepare($query);
$result = $stmt->execute();

$label = $stmt->fetch();
// print_r($page);
// var_dump($banner);
=======

$conn = new PDO("mysql:host=$servername;dbname=ecommnerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query="SELECT * FROM `labels`WHERE `id`=$_id";
$stmt=$conn->prepare($query);
$result=$stmt->execute();
$labels= $stmt->fetch();
//echo '<pre>';
//print_r($banners);
//echo '</pre>';
////var_dump($banners);

// foreach ($banners as $banner):

//     endforeach;
>>>>>>> 5aa01343f82136f90e7534f447cdf249e01868e5

?>
<!doctype html>
<html lang="en">
<<<<<<< HEAD
  <head>
=======
<head>
>>>>>>> 5aa01343f82136f90e7534f447cdf249e01868e5
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<<<<<<< HEAD
    <title>CRUD</title>
  </head>
  <body>
  <section>
        <div class="container">
            <div class="row justify-content-center">  
                <div class="col-sm-8">
                    <h1 class="text-center">Add label</h1>
                    <form method="post" action="update.php?id=<?=$label['id'];?>">
                    <div class="mb-3 row">                     
                        <label for="name" class="col-sm-2 col-form-label">Title :</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" id="title" name="title" value="<?=$label['title'];?>">
                         </div>
                    </div>

                    <div class="mb-3 row">                     
                        <label for="link" class="col-sm-2 col-form-label">Image :</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" id="image" name="image" value="<?=$label['picture'];?>">
                         </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
=======
    <title>Banners List</title>
</head>
<body>
<section>
    <div class="container">
        <div  class="row justify-content-center">
            <div class="container">
                <h1 class="text-center"> Update </h1>
                <form method="post" action="store.php">
                    <div class="mb-3 row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" value="<?=;?> ">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="picture" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="picture" name="picture" value=" ">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
>>>>>>> 5aa01343f82136f90e7534f447cdf249e01868e5
