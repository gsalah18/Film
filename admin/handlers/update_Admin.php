<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");   

if(isset($_POST['edit'])){
$adminId=$_POST['AId'];
$name=$_POST['name'];
$email=$_POST['email'];
$userPass = $_POST['password'];
$photo = $_POST['img'];

 echo $userPass=password_hash($userPass,PASSWORD_DEFAULT);
 

//echo $P=password_hash($Pass,PASSWORD_DEFAULT);
$result = update("admin","name='$name', password='$userPass', img='$photo', email='$email'" ,"where id='$adminId' ");

echo "<pre>";
print_r($result);
echo "</pre>";
 Aredirect("pages/examples/profile.php");
}
?>
