<?php
$a=<<<AB
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email-Template</title>
</head>
<body >
<center style="margin: 0 10px 10px 10px;padding-top: 0" >
<table role="presentation"  style="width:602px;background:rgb(236, 233, 33);border-style: solid;border-color:black">
    <tr>
     <td style="background-color: black ; padding-bottom: 2px ;padding-top: 2px;"></td>
 </tr>
    <tr>
    <td align="center" style="padding:20px 0 20px 0;">
        <img src="https://assets.codepen.io/210284/h1.png" alt="" width="300"/>
        <h1><strong>Welcome to{{Product}}</strong></h1>
    </td>
</tr>
   <tr>
       <td style="padding: 10px 4px 0 4px">Hello {{name}}</td>
   </tr>
    <tr>
        <td style="padding: 10px 8px 40px 8px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi consequatur, dignissimos dolorum ea eligendi et fugiat itaque, laboriosam magni maxime molestias nostrum perferendis quaerat quam quasi quibusdam sed, tempora?</td>
    </tr>
    <tr>
        <td align="center" style="padding: 10px 0 40px 0" > <a href="https://c.tenor.com/YbmQHDSJvbkAAAAC/thumbs-up-hacker.gif"> <button  style="background-color: blue;color: aliceblue;padding: 5px 5px 5px 5px ;" > Login into your account</button></a></td>
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
        <td><a href="https://c.tenor.com/-zRhQFj6oJAAAAAC/hacker-mainframe.gif">captain@gmail.com</a></td>
    </tr>


    
</table>
    <table>
        <tr>
        <td align="center" style="padding-top: 10px;">Some Firm Ltd,35 avenue.City,USA</td>
        </tr>

        <tr>
            <td align="center" ><u style="color: red">Unsubscribe</u> for our email</td>

        </tr>
    </table>
</center>
</body>
</html>
AB;
echo $a;