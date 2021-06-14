<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");     


$videoid=$_GET['videoid'];
$cId=$_GET['commentid'];


delete("comment","where id='$cId'");

redirect("details.php?id=$videoid");
?>