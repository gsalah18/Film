<?php

$path="C:/xampp/htdocs/gradProject/film/";
require($path."handlers/db.php");


session_start();
unset($_SESSION['AId']);
unset($_SESSION['Aname']);

Aredirect("admin.php")

?>