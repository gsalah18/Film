<?php
$path="C:/xampp/htdocs/gradProject/film/";
require($path."handlers/db.php");

$name=$_POST['name'];

$myFile=$_FILES['video'];

$fileName=$myFile['name'];
$fileTmp=$myFile['tmp_name'];

$myImg=$_FILES['poster'];

$file_Name=$myImg['name'];
$file_Tmp=$myImg['tmp_name'];

$type=$_POST['type'];

$cats_id=$_POST['cats_id'];
$describtion =$_POST['describtion'];


if(empty($name) || empty($fileName) || empty($file_Name) || empty($cats_id) || empty($describtion)){
    $errors[]="please fill all filed" ;
    fail($errors);
    Aredirect("handlers/add__video.php");
}else{
$insert=add('video',"name,video,poster,type,describtion,cats_id","'$name','$fileName','$file_Name','$type','$describtion','$cats_id'");
success ("add video successfuly");
print_r($insert);
move_uploaded_file($fileTmp,"../uploades/$fileName");
move_uploaded_file($file_Tmp,"../uploades/$file_Name");}
Aredirect("pages/forms/video.php");
 ?>
 