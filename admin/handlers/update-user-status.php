<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");     


echo $userId=$_GET['id'];
echo $status=$_GET['status'];

update("user","status='$status'","where id='$userId'");

Aredirect("pages/tables/userData.php");
?>