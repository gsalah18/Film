<?php

require("db.php");
$userId=$_POST['userId'];
$videoId=$_POST['videoId'];

$insert=add('mylist',"user_id,video_id","'$userId','$videoId'");

redirect("details.php?id=$videoId");

?>
