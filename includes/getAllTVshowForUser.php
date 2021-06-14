<?php
$getAllTVshow="SELECT * FROM `tvshow` WHERE 1 LIMIT $page_1,4";
$getAllTVshowResultForUser=mysqli_query($conn,$getAllTVshow);






