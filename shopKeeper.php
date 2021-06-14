<?php
$path="C:/xampp/htdocs/gradProject/film/" ;
require($path ."handlers/db.php");

    ?>


<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form method="post" action="<?= AURL ?>handlers/add-shopkeper.php" enctype="multipart/form-data">
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control"
                             id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control"
                             id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                        <input type="address" name="address" class="form-control"
                             id="exampleInputPassword1" placeholder="Address">
                </div>                  

                <div class="form-group">
                    <label for="exampleInputPassword1">Mobile No.</label>
                        <input type="text" name="mobile_no" class="form-control"
                             id="exampleInputPassword1" placeholder="mobile No.">
                </div>
             
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>

</body>
</html>
