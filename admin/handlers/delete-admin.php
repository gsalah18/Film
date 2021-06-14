<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");     


echo $aId=$_GET['id'];

delete("admin","where id='$aId'");

Aredirect("pages/tables/adminData.php");
?>