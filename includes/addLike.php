<?php
require_once("connect.php");
session_start();
$blogId=$_POST['blogId'];

if(isset($_SESSION['userId'])){
    $userId=$_SESSION['userId'];
}
else{
    $userId=$_SESSION['loginAdmin'];
}



$addlike="INSERT INTO `likes`( `likeUser`, `likeBlog`)
                            VALUES ('$userId','$blogId')";

if(mysqli_query($conn,$addlike)){
    // echo "add Like ";
}
else{
    echo "login";

}