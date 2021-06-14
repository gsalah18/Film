<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");     


echo $uId=$_GET['id'];

delete("user","where id='$uId'");

Aredirect("pages/tables/userData.php");
?>