<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");     


echo $vId=$_GET['id'];

delete("video","where id='$vId'");

Aredirect("pages/tables/videoData.php");
?>