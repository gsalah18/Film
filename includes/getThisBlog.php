<?php

$getThisBlog="SELECT * FROM `blog` INNER JOIN `users` ON `users`.`userId`=`blog`.`blogUser` WHERE `blogId`='$blogId' ";
$getThisBlogResult=mysqli_query($conn,$getThisBlog);
$thisBlog=mysqli_fetch_assoc($getThisBlogResult);
