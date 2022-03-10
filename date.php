<!DOCTYPE html>
<html lang="en">

<body>

<?php
$t=date("D");
if ($t<"Fri"){
    echo "Have a nice weekend";
}
else{
    echo "Unfortunatly, you're lucky";
}


 die();
    $t=date("H");
    if ($t<"20"){
        echo "Have a good day";
    }
?>

</body>
</html>