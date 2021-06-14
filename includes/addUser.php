<?php
session_start();
require_once("../admin/production/functions/connect.php");
$userFirstName=$_POST['userFirstName'];
$userSecondName=$_POST['userSecondName'];
$userEmail=$_POST['userEmail'];
$userPass=$_POST['userPass'];
$userDOB=$_POST['userDOB'];
$userCountry=$_POST['userCountry'];
$userCity=$_POST['userCity'];
$userImage=$_FILES['userImage'];

$userPass=password_hash($userPass,PASSWORD_DEFAULT);

$userImageName=$userImage['name'];
$userImageTmp=$userImage['tmp_name'];

if($userImageName!=''){
    $randomString=uniqid();
    $pathImage=pathinfo($userImageName,PATHINFO_EXTENSION);
    
    
    $userImageName="$randomString.$pathImage";
}

$inserUser="INSERT INTO `users`( `userFirstName`, `userSecondName`, `userEmail`, `userPassword`, `userImage`, `DOB`, `userCountry`, `userCity`)
                        VALUES('$userFirstName','$userSecondName','$userEmail','$userPass','$userImageName','$userDOB','$userCountry','$userCity')";

if(mysqli_query($conn,$inserUser)){
    move_uploaded_file($userImageTmp,"../admin/production/images/$userImageName");
    $_SESSION['userId']=$conn->insert_id;
    $_SESSION['success']=1;
    header("location: $_SERVER[HTTP_REFERER]");
}
else{
    // echo "Error :".mysqli_error($conn);
}