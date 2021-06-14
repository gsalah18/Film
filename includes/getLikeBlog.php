<?php

$getLikeBlog="SELECT * FROM `likes` WHERE `likes`.`likeBlog`='$blogId'";
$getLikeBlogResult=mysqli_query($conn,$getLikeBlog);
$likeNumber=mysqli_num_rows($getLikeBlogResult);
