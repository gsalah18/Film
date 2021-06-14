<?php
$path="C:/xampp/htdocs/gradProject/film/";
require($path."handlers/db.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$mobile_no=$_POST['mobile_no'];

$errors=[];  

if(empty($name) or empty($email) or empty($address) or empty($mobile_no) )
{
    $errors[]="please fill all fields";
    fail($errors);

    } else {
       $insert=add('shopkeeper',"name,email,password,address,mobile_no","'$name','$email','$password','$address','$mobile_no'");
       success("add shopkeeper successfuly");
       
    }
    redirect("shLogin.php");
?>

