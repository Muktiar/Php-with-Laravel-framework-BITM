<?php
echo <<<
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email-Template</title>
</head>
<body>
<center>
<table role="presentation"  style="width:602px;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
<tr>
    <td align="center" style="padding:40px 0 30px 0;">
        <img src="https://assets.codepen.io/210284/h1.png" alt="" width="300" style="height:auto;display:block;" />
        <h1><strong>Welcome to{{Product}}</strong></h1>
    </td>
</tr>
   <tr>
       <td>Hello {{name}}</td>
   </tr>
    <tr>
        <td style="padding: 10px 0 40px 0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi consequatur, dignissimos dolorum ea eligendi et fugiat itaque, laboriosam magni maxime molestias nostrum perferendis quaerat quam quasi quibusdam sed, tempora?</td>
    </tr>
    <tr>
        <td align="center" style="padding: 10px 0 40px 0" ><button style="background-color: blue;color: aliceblue;padding: 5px 0 5px 0 ">Login into your account</button></td>
    </tr>
    <tr>
        <td style="padding-bottom: 20px">Regards user</td>
    </tr>
    <tr>
        <td>Captain Jack Sparroy</td>
    </tr>
    <tr>
        <td>CEO,Pirates of the carribian</td>
    </tr>
    <tr>
        <td><a href="">captain@gmail.com</a></td>
    </tr>
</table>
</center>
</body>
</html>
str;
?>