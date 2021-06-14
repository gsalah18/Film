<?php

$commentId=$_GET['id'];

$sql="SELECT comment.id as commentId,details,comment.created_at as
 commentCreated,name FROM comment JOIN user on 
 comment.userId=user.id where comment.video_id=$id";

$result=mysqli_query($conn,$sql);
$commentDetails =mysqli_fetch_all($result);


?>
