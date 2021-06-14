<?php
require("db.php");

$amount=$_POST['amount'];
$note=$_POST['note'];
$plan=$_POST['plan'];
$userId=$_POST['userId'];


       $insert=add('clientpaymentdetails',"amount,note,plan,user_id","'$amount','$note','$plan','$userId'");
       success("add admin successfuly");
       
    
   // Aredirect("clientpayment.php");
?>



