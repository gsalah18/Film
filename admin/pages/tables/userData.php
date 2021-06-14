<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");     

if(!isset($_SESSION['Type'])){

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LamaSaad">
    <meta name="keywords" content="film , movies,tv show,tv series,play,watch now">
    <meta name="description"
        content="film is a website to show different type of movies, play,tv shows and tv series for kids and adult">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film Watch Now</title>
    <!-- inclue icon -->
    <link rel="shortcut icon" href="images/favico.ico" type="image/x-icon">
    <!-- include file css for font awesome icon -->
    <link rel="stylesheet" href="css/assets/all.min.css">
    <!-- include file css for bootstrap -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- include slick css files  -->
    <link rel="stylesheet" href="css/slick/slick.css">
    <link rel="stylesheet" href="css/slick/slick-theme.css">
    <!-- include file css for responsive -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- include the main  file css  -->
    <link rel="stylesheet" href="css/style.css">

    <!--searching-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    * {
        box-sizing: border-box;
    }

    .topnav a {
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }


    .topnav .search-container {
        float: right;
    }

    .topnav input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
    }

    .topnav .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
                        <form class="form-inline" method="get" action="searchU.php">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" name="name"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search" name="name">
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
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
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
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
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
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
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
            <!-- Brand Logo -->
     
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
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                            <a href="<?= AURL ?>index.php" class="nav-link ">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                    <i class="right "></i>
                                </p>
                            </a>
                        </li>
  
                        <li class="nav-item">
                            <a href="#" class="nav-link">
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
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
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
                            <a href="<?= AURL ?>handlers/admin-logout.php" class="nav-link">
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
                            <h1>User Data Tables</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= AURL ?>index.php">Home</a></li>
                                <li class="breadcrumb-item active">User Data Tables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Search -->

            </br>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>user name</th>
                                                <th>user email</th>
                                                <th>register date</th>
                                                <th>status</th>
                                                <th>activity</th>
                                                <th></th>
                                                <th>amount</th>
                                                <th>plan</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                 $data=selectAll("user");
                  while($userData = mysqli_fetch_assoc($data)){
                    ?>
                            <tr>
                                <td><?= $userData['name'] ?></td>
                                <td><?= $userData['email'] ?></td>
                                <td><?= $userData['created_at'] ?></td>
                                <td><?php if($userData['status']==1){ ?>
                                    <button class="btn btn-primary">pending</button>
                                    <?php } else { ?>
                                        <button class="btn btn-success">approved</button>
                                     <?php } ?>
                                </td>

                                <td><?php if($userData['status']==1){ ?>
                                    <a href="<?= AURL ?>handlers/update-user-status.php?id=<?= $userData['id'] ?>&status=2"
                                        class="btn btn-success">approved</a>
                                    <?php } else { ?>
                                    <a href="<?= AURL ?>handlers/update-user-status.php?id=<?= $userData['id'] ?>&status=1"
                                        class="btn btn-primary">pending</a>
                                    <?php } ?>
                                </td>
  
  
                                <?php $userData['biography']; ?>  <!-- calling biography of user register-->

                                <td>
                                    <a href="<?= AURL ?>handlers/delete-user.php?id=<?= $userData['id']; ?>"
                                        class="btn-outline-danger">delete</a>
                                </td>
     <?php
                                $data=selectAll("clientpaymentdetails");
                  while($userData = mysqli_fetch_assoc($data)){
  
                    ?>
                                <td><?= $userData['amount'] ?></td>

                                <td><?= $userData['plan'] ?></td>
                            
                            </tr> <?php } ?>
<?php } ?>

                                        </tbody>
                                    </table>
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
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
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
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>
<?php } ?>