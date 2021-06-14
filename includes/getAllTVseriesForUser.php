<?php
$getAllTVseries="SELECT * FROM `tvseries` WHERE 1 LIMIT $page_1,4";
$getAllTVseriesResultForUser=mysqli_query($conn,$getAllTVseries);






