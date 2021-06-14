<?php

$path="C:/xampp/htdocs/gradProject/film/";
require($path."handlers/db.php");

$AEmail=$_POST['email'];
$APass=$_POST['password'];
$userType = $_POST['Type'];

$sql="SELECT * from admin where email='$AEmail' ";

$query=mysqli_query($conn,$sql);
$countUser = mysqli_num_rows($query);
$adminData = mysqli_fetch_assoc($query);
$adminPassword=$adminData['password']; 


if($countUser >=1){

   if(password_verify($APass,$adminPassword)){

    $_SESSION['AId']=$adminData['id'];
    $_SESSION['Aname']=$adminData['name'];
    $_SESSION['Aemail']=$adminData['email'];
    $_SESSION['photo']=$adminData['img'];
    $_SESSION['date']=$adminData['created_at'];
    $_SESSION['Types']=$adminData['Type'];

    Aredirect("index.php");

   }}
 /* if($userType == 1){
   Aredirect("index.php");
  }
 else {Aredirect("pages/tables/videoData.php");
 }
}else{
    Aredirect('admin.php');
  } // email true , password false
}else {
    Aredirect('admin.php');
} //email false
*/
?>


