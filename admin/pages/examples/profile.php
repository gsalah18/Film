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
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="../../index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>

                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>

                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image"  >
                        <img style="width:35px; height:35px; border-radius: 50%;" src="<?= AURL ?>uploades/<?=$_SESSION['photo'];?>" alt="User Image">
                    </div>
                    
                    <div class="info">
                        <a href="#" class="d-block"><?= $_SESSION['Aname']?></a>
                    </div>
                    
                </div>

                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="<?= AURL ?>index.php" class="nav-link">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                        Dashboard
                                        <i class="right "></i>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Forms
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">


                                    <li class="nav-item">
                                        <a href="../forms/admin.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add admin</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="../forms/cats.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add category</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="../forms/video.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add video</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Tables
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">


                                    <li class="nav-item">
                                        <a href="../tables/shopKeeperData.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>shopKeeper Data</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="../tables/adminData.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>admin Data</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="../tables/videoData.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>video Data</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="../tables/userData.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>user Data</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
            
                            <li class="nav-item">

                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Pages
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="../examples/contact-us.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Contact us</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon far fa-plus-square"></i>
                                    <p>
                                        Extras
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">


                                    <li class="nav-item">
                                        <a href="../examples/404.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Error 404</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../examples/500.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Error 500</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                            <a href="<?= AURL?>pages/examples/profile.php" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                    <p>Admin Profile</p>
                            </a>
                        </li>

                            <li class="nav-item">
                                <a href="<?= AURL?>handlers/admin-logout.php" class="nav-link">
                                    <i class="nav-icon fas fa fa-power-off"></i>
                                    <p> Log Out
                                        <i class="right "></i>
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Profile</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">User Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">

                                <!-- Profile Image -->
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                        <img style="width: 150px; height:150px; border-radius: 50%;" src="<?= AURL ?>uploades/<?=$_SESSION['photo'];?> " alt="User Image">
                                        </div>

                                        <h3 class="profile-username text-center"> <?= $_SESSION['Aname']?> </h3>

                                        <h3 class="profile-username text-center" style="font-size: 18px;"> <?= $_SESSION['Aemail']?> </h3>
                                        
                                        <p class="text-muted text-center"><?= $_SESSION['date']?></p>


                                    </div>
                                    <!-- /.card-body -->
                                </div>
                        
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-9">
                                <div class="card">
                                    
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                           
                                        <form method="post" action="<?= AURL ?>handlers/update_Admin.php" class="form-horizontal">
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail" class="col-sm-2 col-form-label" >Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName2" class="col-sm-2 col-form-label" >password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" id="inputName2" name="password" placeholder="password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputExperience" class="col-sm-2 col-form-label">photo</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control" id="inputExperience" name="img" placeholder="my photo"></textarea>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                        <input type="submit" class="btn btn-outline-info" name="edit" value="UPDATE DATA" />

                                                         <input type="hidden" name="AId" value="<?= ($_SESSION['AId']) ?>" />

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.tab-pane -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
    </body>

    </html>