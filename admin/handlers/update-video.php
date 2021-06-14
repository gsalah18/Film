<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");   

if(isset($_POST['edit'])){

echo $videoId=$_POST['vId'];
$name=$_POST['name'];
$poster=$_POST['poster'];
$describtion = $_POST['describtion'];
 
$result = update("video","name='$name', poster='$poster',describtion='$describtion'" ,"where id='$videoId'");

echo "<pre>";
print_r($result);
echo "</pre>";
 Aredirect("pages/tables/videoData.php");
}
?>

