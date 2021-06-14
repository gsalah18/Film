<?php
require_once("connect.php");
session_start();
if(isset($_SESSION['userId'])){
    $userId=$_SESSION['userId'];
}
else if(isset($_SESSION['loginAdmin'])){
    $userId=$_SESSION['loginAdmin'];
}
$userFirstName=$_POST['userFirstName'];
$userSecondName=$_POST['userSecondName'];
$userPassword=$_POST['userPassword'];
$userDOB=$_POST['userDOB'];
$userGender=$_POST['userGender'];

$updateUser="UPDATE `users` SET `userFirstName`='$userFirstName',
                                `userSecondName`='$userSecondName',
                                `userPassword`='$userPassword',
                                `DOB`='$userDOB',
                                `userGender`='$userGender'
WHERE `userId`='$userId' ";




if(mysqli_query($conn,$updateUser)){
    header("location: $_SERVER[HTTP_REFERER]");
    $_SESSION['success']=1;

}
else{
   
    echo "error".mysqli_error($conn);
}