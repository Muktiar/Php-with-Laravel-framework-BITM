<?php
$s=<<<Bitm
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>title</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend> A Simple Form</legend>
        <label> Enter Full Name</label>
        <input type="text" name ="Fullname" /><br>
        <input type="file" name ="article" /><br>
        <button>Submit</button>

    </fieldset>
    </form>
</body>
</html>

Bitm;
echo $s;
echo"<br>";
echo"<pre>";
echo"any";
echo"<hr/>";
print_r($_REQUEST);
echo "get";
echo"<hr/>";
print_r($_GET);
echo "post";
echo"<hr/>";
print_r($_POST);

echo"</pre>";
?>