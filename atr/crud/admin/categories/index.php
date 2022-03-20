<?php

// Connect to database
//echo "<pre>";
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query= "SELECT * FROM `categories`";
$stmt= $conn-> prepare($query);
$result = $stmt->execute();
$categories= $stmt->fetchAll();
//var_dump($banner);


//echo "</pre>";
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> List</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-7">
                <h1 class = "text-center mb-4">List</h1>
                <table class="table table-success table-striped table-bordered table-border-black table-sm table-hover">
                    <thead>
                    <tr>



                        <th scope="col"  style="text-align: center; background-color: black;color:white" >Name</th>
                        <th scope="col"  style="text-align: center; background-color: black;color:white" >Link</th>
                        <th scope="col"  style="text-align: center; background-color: black;color:white" >Action</th>


                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    foreach ($categories as $category):
                        ?>



                        <tr style="text-align: center">


                            <td><?php echo $category['name'];?></td>
                            <td><?php echo $category['link'];?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">

                                    <a href="show.php?id=<?=$category['id']?>"> <button type="button" class="btn btn-outline-primary">Show</button></a>
                                    <button type="button" class="btn btn-outline-secondary">Edit</button>
                                    <a href="delete.php?id=<?=$category['id'];?>"><button type="button" class="btn btn-outline-danger">Delete</button></a>

                                </div>
                            </td>
                        </tr>
                    <?php

                    endforeach;
                    ?>



                    </tbody>
                </table>
                <a href="create.php"> <button type="button" class="btn btn-outline-primary">Add</button></a>
            </div>
        </div>

    </div>

</section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>

