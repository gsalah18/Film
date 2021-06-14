<?php
  require("db.php");

$userEmail=$_POST['userEmail'];
$userPass=$_POST['userPass'];
$userType = $_POST['Type'];


$sql="SELECT * from user where 	email='$userEmail' and Type='$userType'";
$query=mysqli_query($conn,$sql);
$countUser = mysqli_num_rows($query);
$userData = mysqli_fetch_assoc($query);
$userPassword=$userData['password']; 


if($countUser >=1){

   if(password_verify($userPass,$userPassword)){

    $_SESSION['userId']=$userData['id'];
    $_SESSION['userName']=$userData['name'];
    $_SESSION['userStatus']=$userData['status'];
    $_SESSION['date']=$userData['created_at'];
    $_SESSION['bio']=$userData['biography'];
    $_SESSION['Types']=$userData['Type'];
    $_SESSION['myphoto']=$userData['photo'];
    $_SESSION['userEmail']=$userData['email'];

    if($userType == 1){ 
  Aredirect("index.php");
}elseif($userType == 2) {
  redirect("index.php");
}elseif($userType == 3) {
  redirect("shop_keeper.php");
}elseif($userType == 4) {
  Aredirect("index.php");
}
}else{
    redirect('index.php');
  } // email true , password false
}else {
    redirect('index.php');
} //email false



?>


