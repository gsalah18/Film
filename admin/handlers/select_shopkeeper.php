<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");     


echo $shId=$_GET['id'];


selectAll("shopkeeper","name","where id='$shId'");


?>