<?php

//Connect to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `users`";
$stmt = $conn->prepare($query);
$result = $stmt->execute();
$users = $stmt->fetchAll();
//var_dump($banners);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD</title>
</head>
<body>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link h4" href="create.php">
                            <button type="button" class="btn btn-outline-success">Add An Item</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-responsive table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col"> ID</th>
                        <th scope="col"> Full Name</th>
                        <th scope="col"> User Name</th>
                        <th scope="col"> Email</th>
                        <th scope="col"> Phone</th>
                        <th scope="col"> Password</th>
                        <th scope="col"> Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    if(count($users)>0):
                        foreach ($users as $user) :
                            ?>
                            <tr>
                                <td> <?php echo $user['id']?> </td>
                                <td><a href="show.php?id=<?php echo $user['id']?>"><?php echo $user['full_name']?></a>  </td>
                                <td><a href="show.php?id=<?php echo $user['id']?>"><?php echo $user['user_name']?></a>  </td>
                                <td> <?php echo $user['mail']?> </td>
                                <td> <?php echo $user['mobile']?> </td>
                                <td> <?php echo md5(true)?></td>
                                <td><a href="edit.php?id=<?php echo $user['id']?>">EDIT</a>  |
                                    <a href="delete.php?id=<?php echo $user['id']?>" onclick="return confirm('Are you sure you want to delete')">Delete</a>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                    else:
                        ?>
                        <tr>
                            <td colspan="2"> No User is Available. <a href="create.php">Click here to add one</a></td>
                        </tr>
                    <?php
                    endif;
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
