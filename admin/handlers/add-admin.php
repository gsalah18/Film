<?php
$path="C:/xampp/htdocs/gradProject/film/";
require($path."handlers/db.php");

$name=$_POST['name'];

$myFile=$_FILES['img'];

$fileName=$myFile['name'];
$fileTmp=$myFile['tmp_name'];

$email=$_POST['email'];
$password=$_POST['password'];
$password1=password_hash($_POST['password'],PASSWORD_DEFAULT);
$Type=$_POST['Type'];
$errors=[];  

if(empty($name) or empty($email) or empty($password) or empty($password1))
{
    $errors[]="please fill all fields";
    fail($errors);

} else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $errors[]="please insert valid email" ;
        fail($errors);

    } else {
      echo $insert=add('admin',"name,email,password,img,Type","'$name','$email','$password1','$fileName','$Type'");
       success("add admin successfuly");
      
      move_uploaded_file($fileTmp,"../uploades/$fileName");
    
    Aredirect("admin.php");
}
?>


