<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");     
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add admin Form</h1>
          </div>
          <div class="col-sm-6">
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6 m-auto">
   
                <?php
                if(isset($_SESSION['success']))  { ?>
                <div class="alert alert-success">
                 <?php echo $_SESSION['success']; ?>
                </div>
                <?php unset($_SESSION['success']);  }

                 if(isset($_SESSION['errors'])) { ?>
                <div class="alert alert-danger"> <?php
                foreach ($_SESSION['errors'] as $error){
                 echo $error ;
                 } ?>
                </div>
                <?php unset($_SESSION['errors']);
                  }
              ?>          

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">add admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="post" action="<?= AURL ?>handlers/add-admin.php" enctype="multipart/form-data">
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" name="name" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">photo</label>
                    <input type="file" name="img" class="form-control" id="exampleInputEmail1" placeholder="chose your photo">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">super admin</label>
                    <select name="Type" id="">
                    <option value="1">super admin</option>
                    <option value="2">cpntact man</option>
                    </select>
                  </div>

                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


            <div class="container" >
        <div class="row">
            <div class="col-6" style=" margin-top: 60px; box-shadow: 35px 35px #dbdbdb;" height="500px ">
                <img src="images.png" style="margin-top: 30px; margin-left: 150px; ">
            </div>

            <p style="margin-top: 50px; font-weight: 700; margin-left: 190px;">Login as a Admin User</p>
            <div class="col-6" style="background-color: rgb(199, 166, 230); margin-top: 50px; box-shadow: 35px 35px #dbdbdb;">
           
            <form method="post" action="<?= AURL ?>handlers/admin-login.php">    
                <input type="text" name="email"  placeholder="Admin@gmail.com" style="border-radius: 15px; margin-left: 190px;"> <br> <br>
                <input type="password" name="password" placeholder="password" style="border-radius: 15px; margin-left: 190px;"> <br> <br>
                <input type="submit"  value="Login" style="color: blueviolet;width: 220px; border-radius: 30px; text-align: center; margin-left: 170px;"  >
            </form>

            </div>
</div>
</div>

          </div>         
        </div>
      </div>
    </section>
  </div>
 
</script>
</body>
</html>
