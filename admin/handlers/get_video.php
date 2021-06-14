<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");     


echo $catId=$_GET['id'];
echo $status=$_GET['status'];

selectAll("video","name=$name","where id='$catId'");


?>