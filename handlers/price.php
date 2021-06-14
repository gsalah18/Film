<?php

require("db.php");

if(isset($_POST['silver'])){
    echo $userId=$_POST['userId'];

echo $pricing_plan=$_POST['pricing_plan'];

$i = "INSERT INTO `user`( `pricing-plan`) VALUES ('$pricing_plan') where id =  $userId";
print_r($i);
}
else echo "jjjjjj" ;
?>