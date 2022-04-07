<?php
$_id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";


<<<<<<< HEAD
$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
=======
$conn = new PDO("mysql:host=$servername;dbname=ecommnerce302713", $username, $password);
>>>>>>> 5aa01343f82136f90e7534f447cdf249e01868e5
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query="SELECT * FROM `labels`WHERE `id`=$_id";
$stmt=$conn->prepare($query);
$result=$stmt->execute();
$labels= $stmt->fetch();
//echo '<pre>';
<<<<<<< HEAD
//print_r($labels);
//echo '</pre>';
////var_dump($labels);

// foreach ($labels as $label):
=======
//print_r($banners);
//echo '</pre>';
////var_dump($banners);

// foreach ($banners as $banner):
>>>>>>> 5aa01343f82136f90e7534f447cdf249e01868e5

//     endforeach;

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<<<<<<< HEAD
    <title>labels List</title>
=======
    <title>Banners List</title>
>>>>>>> 5aa01343f82136f90e7534f447cdf249e01868e5
</head>
<body>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center mb-4"> List</h1>
                <table class="table  table-success table-striped table-bordered table-hover">
                    <thead>
                    <tr>

                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
<<<<<<< HEAD
                        <th scope="col">Picture_Title</th>
=======
                        <th scope="col">Picture</th>
>>>>>>> 5aa01343f82136f90e7534f447cdf249e01868e5
                    </tr>
                    </thead>
                    <tbody>
                   
                    <tr>
                        <td><?= $labels['id'];?></td>
                        <td><?= $labels['title'];?></td>
                        <td><?= $labels['picture'];?></td>
                        
                    </tr>
                    

                    </tbody>
                </table>


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
