<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");     


echo $shId=$_GET['id'];

delete("shopkeeper","where id='$shId'");

Aredirect("pages/tables/shopKeeperData.php");
?>