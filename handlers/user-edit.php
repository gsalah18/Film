<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");   

if(isset($_POST['edit'])){
$userId=$_POST['userId'];
$name=$_POST['userFirstName'];
$email=$_POST['userEmail'];
$userPass = $_POST['userPass'];
$photo = $_POST['photo'];
$biography = $_POST['biography'];

 echo $userPass=password_hash($userPass,PASSWORD_DEFAULT);
 
$result = update("user","name='$name', password='$userPass', photo='$photo', email='$email', biography='$biography'" ,"where id='$userId'");

echo "<pre>";
print_r($result);
echo "</pre>";
redirect("update-user-info.php");
}
?>