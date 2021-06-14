<?php
require("config.php");

define('SERVERNAME', 'localhost');
define('USERROOT', 'root');
define('PASSROOT', '');
define('DBNAME', 'watch');

$conn = mysqli_connect(SERVERNAME, USERROOT, PASSROOT, DBNAME);      

function success($msg)
{ 
    $_SESSION['success']=$msg;
}

function fail($error)                 
{
    $_SESSION['errors']=$error;
}

function add($table,$fields,$value)     //add function
{   global $conn;

  $sql="INSERT INTO $table($fields)VALUES($value)";
  if (mysqli_query($conn, $sql)){
     return success("add admin seccessfuly");
  } else {
      return mysqli_error($conn);
  }
}

function selectAll($table,$fields="*")     //select all function
{   global $conn; 
  $sql="SELECT $fields FROM $table" ;
  return $result= mysqli_query($conn, $sql);
 
}

function selectWhere($table,$cond,$fields="*"){
  global $conn; 
  $sql="SELECT $fields FROM $table where $cond";
  $result=mysqli_query($conn,$sql);
  return mysqli_fetch_assoc($result);
}

function selecttype($table,$cond,$fields="*"){
  global $conn; 
  $sql="SELECT $fields FROM $table where $cond";
  return $result=mysqli_query($conn,$sql);

}

function selectW($table,$cond,$fields="*"){
  global $conn; 
  $sql="SELECT $fields FROM $table where $cond";
  $result=mysqli_query($conn,$sql);
  return mysqli_fetch_all($result);
}

function update($table,$fields,$cond){
    global $conn;
    $sql="UPDATE $table SET $fields $cond";
    if(mysqli_query($conn, $sql)){
       return 1;
    } else{
      return mysqli_error($conn);
    }
}

function delete($table,$cond){
  global $conn;
  $sql="DELETE FROM $table $cond";
  if(mysqli_query($conn, $sql)){
     return 1;
  } else{
    return mysqli_error($conn);
  }
}

function Aredirect($link){      //for admin
  header("location:".AURL.$link);
}

function redirect($link){     //for user
  header("location:".URL.$link);
}