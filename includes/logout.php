<?php

session_start();
if(isset($_SESSION['loginAdmin'])){
    session_destroy();

    header("location: ../index");
}
else{
    session_destroy();

    header("location: $_SERVER[HTTP_REFERER]");
}
