<?php
require("db.php");

$userFirstName = $_POST['userFirstName'];

$myImg=$_FILES['photo'];

$fileName=$myImg['name'];
$fileTmp=$myImg['tmp_name'];

$userEmail = $_POST['userEmail']; 
$userPass = $_POST['userPass'];
$psw_repeat = $_POST['psw_repeat'];
$biography = $_POST['biography'];
$userType = $_POST['Type'];

$errors=[];

if(empty($userFirstName)or empty($userEmail)or empty($userPass)or empty($psw_repeat)){
 $errors[]="please fill all filed" ;
 fail($errors);
 redirect("login.php");
} else if($userPass!= $psw_repeat){
    $errors[]="two password does not equal" ;
    fail($errors);
    redirect("login.php");
}  else{
    $userPass=password_hash($userPass,PASSWORD_DEFAULT);
    $insert=add('user',"name,photo,email,password,biography,Type","'$userFirstName','$fileName','$userEmail','$userPass','$biography','$userType'");
  
    move_uploaded_file($fileTmp,"../upload/".$fileName);    
  redirect("index.php");
}

