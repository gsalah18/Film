<?php
require_once("connect.php");
session_start();
$userEmail=$_POST['userEmail'];
$userPassword=$_POST['userPassword'];

$login="SELECT * FROM `users` WHERE `userEmail`='$userEmail'  ";
$loginResult=mysqli_query($conn,$login);
$loginData=mysqli_fetch_assoc($loginResult);

if(mysqli_num_rows($loginResult) > 0){
    
    if (password_verify($userPassword, $loginData['userPassword'])){
                $_SESSION['loginError']=0;
                $_SESSION['login']=0;
                if($loginData['userType']=='admin'){
                    $_SESSION['loginAdmin']=$loginData['userId'];
                }
                else{
                    $_SESSION['userId']=$loginData['userId'];
                }
                header("location: $_SERVER[HTTP_REFERER]");
    }
    else{
        $_SESSION['loginError']=1;
        header("location: $_SERVER[HTTP_REFERER]");
    }
}
else{
    $_SESSION['loginError']=1;
    header("location: $_SERVER[HTTP_REFERER]");
}

