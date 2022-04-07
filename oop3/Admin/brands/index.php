<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query="SELECT * FROM `brands`";
$stmt=$conn->prepare($query);
$result=$stmt->execute();
$brands= $stmt->fetchAll();
//echo '<pre>';
//print_r($banners);
//echo '</pre>';
////var_dump($banners);

foreach ($brands as $brand):

    endforeach;

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Banners List</title>
</head>
<body>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <h1 class="text-center mb-4"> List</h1>
                <table class="table  table-success table-striped table-bordered table-hover">
                    <thead>
                    <tr>

                        <th scope="col">Title</th>
                        <th scope="col">Link</th>
                        <th scope="col">Draft</th>
                        <th scope="col">active</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Modified_at</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($brands as $brand):


                    ?>
                    <tr>
                        <td><?= $brand['title'];?></td>
                        <td><?= $brand['link'];?></td>
                        <td><?= $brand['is_draft'];?></td>
                        <td><?= $brand['is_active'];?></td>
                        <td><?= $brand['soft_delete'];?></td>
                        <td><?= $brand['created_at'];?></td>
                        <td><?= $brand['modified_at'];?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn  btn-outline-primary">Show</button>
                                <button type="button" class="btn  btn-outline-secondary">Edit</button>
                                <button type="button" class="btn  btn-outline-danger">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>

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
