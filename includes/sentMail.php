<?php

session_start();
if(isset($_SESSION['userId']) || isset($_SESSION['loginAdmin'])){

    require_once("getThisUser.php");
    $userEmail=$getThisUserData['userEmail'];
    $subject=$_POST['subject'];
    $message=wordwrap($_POST['message'],70);
    $to="lamasaad65@gmail.com";

    mail($to,$subject,$message,$userEmail);
    $_SESSION['success']=1;
    header("location: ../contact.php");

}
else{
    $_SESSION['login']=1;
    header("location: ../contact.php");
}
