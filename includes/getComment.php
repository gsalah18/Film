<?php

$getComment="SELECT * FROM `comment` INNER JOIN `users` ON `comment`.`commentUser`=`users`.`userId`
INNER JOIN `blog` ON `comment`.`commentBlog`=`blog`.`blogId`
WHERE `blog`.`blogId`='$blogId'";
$getCommentResult=mysqli_query($conn,$getComment);
$commentNumber=mysqli_num_rows($getCommentResult);