<?php
  require("db.php");

$userEmail=$_POST['uname'];
$userPass=$_POST['psw'];

$sql="SELECT * from shopkeeper where email='$userEmail' ";
$query=mysqli_query($conn,$sql);
$countUser = mysqli_num_rows($query);
$shopkeeperData = mysqli_fetch_assoc($query);
//$userPassword=$shopkeeperData['password']; 

  redirect('clientpayment.php');


?>