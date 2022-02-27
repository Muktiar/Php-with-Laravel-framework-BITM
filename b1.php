<?php
$n ='1234';
echo"ver_dump($n)"."<br>";
$n =12345678;
echo "ver_dump($n)"."<br>";
echo"<hr/>";

echo "<pre>";
print_r($_SERVER);
echo"</pre>";
echo "<br>";
$pof='Failed';
$mark=90;
if($mark > 49 && $mark<80){
    $pof='passed';
}
elseif ($mark>=80){
    $pof='A+';
}
else{
    $pof='Fail';
}
echo $pof;
?>