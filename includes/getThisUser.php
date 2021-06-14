<?php
require_once('connect.php');
session_start();
if(isset($_SESSION['loginAdmin'])){
    $userId=$_SESSION['loginAdmin'];
}
else{
    $userId=$_SESSION['userId'];
}




$getThisUser="SELECT * FROM `users` WHERE `userId`='$userId'";
$getThisUserResuelt=mysqli_query($conn,$getThisUser);
$getThisUserData=mysqli_fetch_assoc($getThisUserResuelt);

