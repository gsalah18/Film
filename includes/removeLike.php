<?php
require_once("connect.php");
session_start();
if(isset($_SESSION['userId'])){
    $userId=$_SESSION['userId'];
}
else if(isset($_SESSION['loginAdmin'])){
    $userId=$_SESSION['loginAdmin'];
}
$blogId=$_POST['blogId'];


$addlike="DELETE FROM `likes` WHERE `likeUser`='$userId' AND `likeBlog`='$blogId'";

if(mysqli_query($conn,$addlike)){
    // echo "remove Like ";
}
else{
    echo "login";

}