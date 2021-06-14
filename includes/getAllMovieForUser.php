<?php
$getAllMovie="SELECT * FROM `movies` WHERE 1 LIMIT $page_1,4";
$getAllMovieResultForUser=mysqli_query($conn,$getAllMovie);






