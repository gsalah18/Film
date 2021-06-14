<?php
$path="C:/xampp/htdocs/gradProject/film/";
require($path."handlers/db.php");

$name=$_POST['name'];
$status=$_POST['status'];

$errors=[];  

if(empty($name)) {
    $errors[]="please fill all fields" ;
    fail($errors);

} else {
       $insert=add('cats',"name,status","'$name','$status'");
        success ("add category successfuly");
       
    }
   Aredirect("pages/forms/cats.php");
?>
