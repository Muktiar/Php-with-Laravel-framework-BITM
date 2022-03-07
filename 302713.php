<?php

echo <<<STR
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>teamplate</title>
  </head>
  <body>
      <div class="bar"></div>
      <div class="container"></div>
    <header>
        
            <div class="image">
                <img src="logo.jpg" alt="logo" width="200" height="200">
            </div>
            <div class="top-header">
               <h2>Welcome to {{Product}}</h2>
            </div>

        
    </header>
    <div class="body-map">
    <div class="body-text">
        <p>Hello {{name}}!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eum, earum natus nemo dignissimos minima, autem nihil inventore laborum ipsam dolore aliquam, id consequatur asperiores distinctio rerum possimus! Magnam, praesentium!</p>
    </div>
    <div class="link">
        <a href="https://www.google.com" style="text-decoration: none;">Login to Your Account</a>
    </div>
    <div class=" footer">
      <p>
          Best regards,
      </p>
      <p>
          Casba Kissi<br> Elerion ltd, CEO and Founder
      </p>
       <a href="htmlteamplate.net">htmlteamplate.net</a>
    </div>
</div>
</div>
<style>
    .bar{
        background-color: black;
        padding: 3px;
    }
    .image{
        margin-left: 40%;
    }
    .top-header{
        font-family: 'Times New Roman', Times, serif;
        margin-left: 30%;
        font-size: 2rem;
    }
    .body-map{
        font-family: 'Times New Roman', Times, serif;
        margin-top: 40px;
        margin-left: 20px;
    }
    .link{
        
        margin-top: 50px;
        margin-left: 40%;
       
    }
    .link a{
        margin-top: 30px;
        color: white;
        background-color: #2554C7;
        padding: 15px;
        box-sizing: border-box;
        border-radius: 5px;
    }
    .footer{
        margin-top: 100px;
    }
    .body-text{
        font-family: 'Times New Roman', Times, serif;
        font-size: 1.2rem;

    }
</style>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
STR;

?>