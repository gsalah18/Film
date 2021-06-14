<?php

$id= $_SESSION['userId'];

$sql="SELECT user_id as userId,video.id as videoId,name,video,poster,describtion FROM
 mylist JOIN video on mylist.id = video.id where mylist.user_id=$id" ;

$result=mysqli_query($conn,$sql);
$myList =mysqli_fetch_all($result);


?>