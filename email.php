<?php

if(isset($_POST['btn-send'])){

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "hamsah.jaber@gmail.com";
$headers="From:".$email;
$txt = "you received an email from".$name.".\n\n".$message;
mail($to,$headers,$subject,$txt);

header('location:contact.php');
redirect("contact.php");
}
?>