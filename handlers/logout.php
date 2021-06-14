<?php
session_start();
unset($_SESSION['userId']);
unset($_SESSION['userName']);
unset($_SESSION['userStatus']);

header("location: ../index.php");

?>