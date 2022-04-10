<?php

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
            <div class="col-6">
                <form method="post" action="store.php">
                    <fieldset>
                    <div class="form-group">
                        <label for="user_fullname">Full Name</label>
                        <input type="text"
                               class="form-control"
                               id="user_fullname"
                               name="full_name"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter yor Full Name">
                    </div>
                    <div class="form-group">
                        <label for="user_username">User Name</label>
                        <input type="text"
                               class="form-control"
                               id="user_username"
                               name="user_name"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter yor User Name">
                    </div>
                    <div class="form-group">
                        <label for="user_mail">Email</label>
                        <input type="email"
                               class="form-control"
                               id="user_mail"
                               name="mail"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Your E-mail">
                    </div>
                    <div class="form-group">
                        <label for="user_mob">Mobile Number</label>
                        <input type="text"
                               class="form-control"
                               id="user_mob"
                               name="mobile"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter your phone">
                    </div>
                    <div class="form-group">
                        <label for="user_pass">Password</label>
                        <input type="password"
                               class="form-control"
                               id="user_pass"
                               name="pass"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Your Password">
                    </div>
                      <button type="submit" class="btn btn-info">Submit</button>
                    </fieldset>
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




