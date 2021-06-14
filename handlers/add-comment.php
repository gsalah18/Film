

<?php

require("db.php");
$text = $_POST['text'];
$userId=$_POST['userId'];
$videoId=$_POST['videoId'];

$insert=add('comment',"details,userId,video_id","'$text','$userId','$videoId'");

redirect("details.php?id=$videoId");


?>