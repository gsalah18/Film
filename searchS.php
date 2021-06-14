<?php
$path="C:/xampp/htdocs/gradProject/film/" ;
require($path ."handlers/db.php");
require($path."admin/handlers/get-cats.php"); 

$video=selecttype('video',"type='series'");

if(isset($_SESSION['userId'])){
    ?>

<!DOCTYPE html>
<html>
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

</head>

<body>

    <!-- start header -->

    <!-- start navbar -->
    <header style="background:transparent ; border: 0.2px steelblue; border-bottom-style: solid;">
    <br>
    <nav>
        <div class="container d-flex py-1  position-relative">
            <input type="checkbox" name="" id="check">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo3.png" alt="film logo" class="img-fluid logo__image">
                    <div class="logo__brand; margin:10px; ">
                        <br>
                        <h5 style="color:steelblue;">WATCH</h5>
                    </div>
                </a>
            </div>
            <div class="navbar">
                <div class="navbar__list">
                    <ul>
                        <li class="nav__link" style="--i: .6s">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="nav__link" style="--i: .85s">
                            <a href="movie.php">Movie <i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown__link">
                                        <a href="newfilm.php">New Film</a>
                                    </li>

                                    <li class="dropdown__link" name="cats_id">
                                        <a href="movie.php">Film Type <i class="fas fa-caret-down">
                                            </i></a>


                                        <div class="dropdown second">

                                            <div class="form-group">
                                                <ul>
                                                    <li class="dropdown__link"><?php foreach($getCats as $cat){ ?>
                                                    <li><a href="movie.php?name"> <?= $cat['name']; ?></a>
                                                        <?php } ?>

                                                    </li>

                                                </ul>
                                            </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav__link" style="--i: 1s">
                            <a href="tvseries.php">Series<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown__link">
                                        <a href="tvshow.php">TV Show</a>
                                    </li>
                                    <div class="arrow"></div>
                                    <li class="dropdown__link">
                                        <a href="tvseries.php">TV Series <i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                        <div class="form-group">
                                                <ul>
                                                    <li class="dropdown__link"><?php foreach($getCats as $cat){ ?>
                                                    <li><a href="movie.php?name"> <?= $cat['name']; ?></a>
                                                        <?php } ?>

                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav__link" style="--i: 1.5s">
                            <a href="price_plan.php">Pricing plans</a>
                        </li>

                        <li class="nav__link" style="--i: 1.5s">
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

               <!-- Search -->
               <div class="search-container">

<form method="get" action="">
<input class="header__form-input" type="text" name="name" placeholder="I'm looking for...">
<button type="submit"><i class="fa fa-search"></i></button>

</form>
</div>

                    </div>
                    <div class="navbar__sign" style="--i: 1.8s">

                        <?php if(!isset($_SESSION['userId'])){?>
                        <a href="#" class="navbar__sign__btn loginBtn" style="color:seashell;">Login</a>
                        <a href="#" class="navbar__sign__btn registerBtn" style="color:seashell;">Signup</a>
                        <?php } ?>
                        <?php if(isset($_SESSION['userId'])){?>

                        <!------------------------------------------------------------------------------------------------->
                        <div class="nav__link" style="--i: .85s">
                            <a><img src="<?= URL ?>upload/<?=$_SESSION['myphoto'];?>" style="width:35px; border-radius: 50%; margin-right:10px;"> 
                            <?= $_SESSION['userName']?> <i class="fa fa-caret-down"></i></a>
                            <div class="dropdown">
                                <div style="background-color:steelblue;opacity:0.7; ">
                            <div class="header__actions">

						</div>
                                    <ul>

                                        <li style="height:30px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
                                            <a style= "color:white; padding:17px; font-size:13px; " href="profile.php"> <span class="progression-studios-menu-title">
                                           <i style="transform: rotate(3deg);" class="fa fa-user-circle" aria-hidden="true"></i>  My Profile</a>
                                        </span>
                                        </li> 

                                        <li style="height:30px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
                                            <a style="color:white; padding:17px; font-size:13px;" href="update-user-info.php"> <span class="progression-studios-menu-title">
                                                <i style="transform: rotate(5deg);" class="fa fa-cogs" aria-hidden="true"></i> Edit profile</a>
                                            </span>
                                        </li>

                                        <li style="height:30px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
                                            <a href="handlers/logout.php"
                                                style="color:whitesmoke; padding:17px; font-size:13px;">
                                                <span class="progression-studios-menu-title"><i style="transform: rotate(5deg);" class="fa fa-power-off"
                                                        aria-hidden="true"></i> Log Out</span></a>
                                        </li>
                                    </ul>

                                </div>
                                <?php } ?>

                                <!-- <a href="profile.html" class="btn__profile"><i class="fas fa-user mr-1"></i></a> <small style="font-size: 10px;"><?=$getThisUserData['userFirstName']?></small>
                             <a href="#" class="ml-2 navbar__sign__btn transparent ">Logout</a> -->
                                <!-- <a href="admin/production/index" class="btn__profile"><i class="fas fa-user-secret mr-1"></i>Dashboard</a>
                             <a href="includes/logout.php" class="ml-2 navbar__sign__btn transparent ">Logout</a> -->
                            </div>
                        </div>
  
        <div class="navbarToggler">
            <div class="navbarToggler__Menu">
                <div>

                </div>
            </div>
        </div>
        </div>
    </nav>
    </header>
    <!-- end header -->
    <br>
    <!-- start movies sevction -->
    <section id="movies" class="movies  row  position-relative">
        <input type="checkbox" name="display" id="checkFilter">

        <div class="movies__categories col-lg-3 container  ">
            <div class="movies__categories_type">
                <hr>
                <div class="movies__categories__byYear ">
                    <h2>Movies by Year</h2>
                    <ul>

                        <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input filter-check" name="" id="year"
                                        value="<?= $row['movieYear']  ?>">
                                    year 1
                                </label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input filter-check" name="" id="year"
                                        value="<?= $row['movieYear']  ?>">
                                    year 2
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
        <hr>
      <div class="movies__categories__byYear ">
        <h2>Top 5 List</h2>
    <hr>
    <div class="Top5List__item">
        <div class="Top5List__item__left">
            1
        </div>
        <div class="Top5List__item__right">
            <small>2021</small>
            <h3>movie name</h3>
            <small>movie type</small>
        </div>
    </div>
    <hr>
    <div class="Top5List__item">
        <div class="Top5List__item__left">
           2
        </div>
        <div class="Top5List__item__right">
            <small>2021</small>
            <h3>movie name</h3>
            <small>movie type</small>
        </div>
    </div>

</div>
            </div>
        </div>

        <div class="movies__filter col-lg-9 ">
            <h2>Movies</h2>
            <hr>

            <div class="loader" id="loader"></div>
            <div class="movies__filter__deitails" id="result">
                <div class="ml-auto">
                    <nav aria-label="Page navigation ">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <hr>
                <input type="checkbox" class="view" name="fa_th" id="fa_th">
                <input type="checkbox" class="view" name="fa_th_large" id="fa_th_large">
                <input type="checkbox" class="view" name="fa_th_list" id="fa_th_list">
                <input type="checkbox" class="view" name="fa_bars" id="fa_bars">
                <!-- movie item -->

<?php

$sql="SELECT * FROM video";
$result=mysqli_query($conn,$sql);
$videoData=mysqli_fetch_all($result);
  foreach($getCats as $cat){ ?>
    <div class="filterDiv <?= $cat['name']?>"> </div>
    
 <?php } ?>

    
 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <?php foreach($getCats as $cat){ ?>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="<?= $cat['name']?>-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="<?= $cat['name']?>" aria-selected="false"><?= $cat['name']?></a>
  </li>
<?php } ?>
</ul>


<!------------------>

<!-----  <div class="container">
  <div class="row">
      <div class="col-6">
                   
<div class="container" id="myTabContent">

  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">   
      <?php foreach(mysqli_fetch_all($video) as $videos): ?>

<div style="margin:5px;">
<video width="180" height="200" poster="<?= AURL ?>uploades/<?=$videos[3];?>" >
  <source src="<?= AURL ?>uploades/<?=$videos[2];?>" type="video/mp4"> 
</video>

<div class="video-content">
  <div class="d-flex justify-content-between align-items-stretch">
    <div style="margin:27px;">
        
      <h3><a href="details.php?id=<?= $videos[0];?>"><?=$videos[1];?></h3></a>
      <p ><?=$videos[5];?></p>
    </div>

    </div>
  </div>
</div>

<?php endforeach; ?></div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
</div>    

      </div>
  </div>
  </div>  --->

<!------------------->
<div class="container">
  <div class="row">
      <div class="col-6">
                   
<div class="container" id="myTabContent">

  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">   
<?php

    if(isset($_GET['name'])){
    $filterValue = $_GET['name'];
    $sql= "SELECT * FROM video WHERE name LIKE '%$filterValue%' and type='series'";
    $sqlResult=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($sqlResult) > 0){
     foreach($sqlResult as $item){
         ?>
<video width="180" height="200" poster="<?= AURL ?>uploades/<?=$item['poster'];?>" >
  <source src="<?= AURL ?>uploades/<?=$item['video'];?>" type="video/mp4"> 
</video>

<h3><a href="details.php?id=<?= $item['id'];?>"><?=$item['name'];?></h3></a>

    <?php     
     }
    }
    else{
        ?>
    <tr>
        <td>no result found</td>
    </tr>
    <?php 
    }
    }
    ?>
                    


<!-- movie item -->

</section>
<!-- end movies sevction -->

<!-- start scroll Up arrow -->
<div style="background-color: steelblue;" class="scrollUp ">
    <a href="#movies"><i class="fas fa-arrow-up "></i></a>
</div>
<!-- end scroll Up arrow -->

<!-- Login Model -->
<div class="modal " id="loginModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  mt-3">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Login<br>
                </h5>
                <button type="button" class="close btnCancel" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/film/includes/login.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control form-control-sm" name="userEmail" id=""
                            aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control form-control-sm" name="userPassword" id=""
                            aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-outline-secondary btnCancel"
                        data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn text-white bg_orange">Login</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- Regestire Model -->

<div class="modal " id="regestirModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  mt-3">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= URL ?>handlers/user-reg.php" enctype="multipart/form-data" method="post">

                <div class="modal-body">

                    <div class="form-group">
                        <label for="userFirstName">Name </label>
                        <input type="text" class="form-control form-control-sm" name="userFirstName" id="userFirstName"
                            aria-describedby="helpId" required="required" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="userEmail">Email </label>
                        <input type="email" class="form-control form-control-sm" name="userEmail" id="userEmail"
                            aria-describedby="helpId" required="required" placeholder="">
                    </div>


                    <div class="form-group">
                        <label for="userPass">Password </label>
                        <input type="password" class="form-control form-control-sm" name="userPass" id="userPass"
                            required="required" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="psw-repeat">Repeat Password</label>
                        <input type="password" class="form-control form-control-sm" placeholder="Repeat Password"
                            name="psw_repeat" id="psw-repeat" required>
                    </div>
                    <button type="submit" class="btn text-white bg_orange" class=">Register">Sign up</button>

                </div>
            </form>

        </div>
    </div>
</div>


<!-- success Model -->
<div class="modal " id="successModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  mt-3">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center align-items-center">
                <h1>Done Success</h1>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="ml-auto btn btn-outline-success" data-dismiss="modal">OK</button>
                <!-- <button type="submit" class="btn text-white bg_orange">OK</button> -->
            </div>
            </form>

        </div>
    </div>
</div>

<!-- start footer -->
<footer class="footer mt-3 py-2 ">
    <section class="topFooter ">
        <div class="topFooter_logo ">FILM</div>
        <div class="topFooter__socialIcon ">
            <span><a href="http:// "><i class="fab fa-facebook "></i>Facebook</a></span>
            <span><a href="http:// "><i class="fab fa-instagram "></i>Instgram</a></span>
            <span><a href="http:// "><i class="fab fa-vimeo "></i>Vimeo</a></span>
            <span><a href="mailto: "><i class="fab fa-google "></i>Google+</a></span>
        </div>
    </section>
    <hr>
    <section class="middleFooter ">
        <div class="middleFooter__right ">
            <div>
                <h2>Movie Categories</h2>
                <div class="middleFooter__right__list ">
                    <ul>
                        <li>
                            <a href=" ">Action</a>
                        </li>
                        <li>
                            <a href=" ">Adventure</a>
                        </li>
                        <li>
                            <a href=" ">Animation</a>
                        </li>
                        <li>
                            <a href=" ">Comedy</a>
                        </li>
                        <li>
                            <a href=" ">Crime</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href=" ">Drama</a>
                        </li>
                        <li>
                            <a href=" ">Fantacy</a>
                        </li>
                        <li>
                            <a href=" ">Horror</a>
                        </li>
                        <li>
                            <a href=" ">Mystrey</a>
                        </li>
                        <li>
                            <a href=" ">Romance</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <h2>TV Series</h2>
                <div class="middleFooter__right__list ">
                    <ul>
                        <li>
                            <a href=" ">Valentine Day</a>
                        </li>
                        <li>
                            <a href=" ">Underrated Comedies</a>
                        </li>
                        <li>
                            <a href=" ">Scary TV Series</a>
                        </li>
                        <li>
                            <a href=" ">Best 2018 Documentaries</a>
                        </li>
                        <li>
                            <a href=" ">Classic Shows</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href=" ">Big TV Premieres</a>
                        </li>
                        <li>
                            <a href=" ">Reality TV Shows</a>
                        </li>
                        <li>
                            <a href=" ">Original Shows</a>
                        </li>
                        <li>
                            <a href=" ">Suprise of the Year Shows</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="middleFooter__left ">
            <h2>Support</h2>
            <div class="middleFooter__left__list ">
                <ul>
                    <li>
                        <a href=" ">My Account</a>
                    </li>
                    <li>
                        <a href=" ">FAQ</a>
                    </li>
                    <li>
                        <a href=" ">Watch on TV</a>
                    </li>
                    <li>
                        <a href=" ">Help Center</a>
                    </li>
                    <li>
                        <a href=" ">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section class="bottomFooter ">
        <p>Copyright &copy; 2021 <span span style="color: steelblue;">FILM WATCH NOW</span>. AllRights Reserved</p>
    </section>
</footer>
<!-- end footer -->



<!-- include js files for use bootstrap -->
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js "></script>
<script src="js/bootstrap.min.js "></script>
<!-- incluse slick file for slider  -->
<script src="js/slick_slider/slick.min.js "></script>
<!-- include the main file javascript -->
<script src="js/main.js"></script>
<script>
$('.loginBtn').click(function() {
    $('#loginModal').modal('show');
});
$('.registerBtn').click(function() {
    $('#regestirModal').modal('show');
});
</script>

<script>
$('.view').click(function() {
    $('.view').prop('checked', false);
    $(this).prop('checked', true);
})
</script>
</body>

</html>
<?php } ?>
