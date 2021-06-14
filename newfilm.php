<?php
$path="C:/xampp/htdocs/gradProject/film/" ;
require($path ."handlers/db.php");
require($path."admin/handlers/get-cats.php");  


if(isset($_SESSION['userId'])){
?>

<!DOCTYPE html>
<html>

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

</head>

<body>
    <!-- start header -->
    <!-- start navbar -->
    <nav>
    <header style="background:transparent ; border: 0.2px steelblue; border-bottom-style: solid;">
        <br>
        <div class="container d-flex py-1  position-relative">
            <input type="checkbox" name="" id="check">
            <div class="logo">
                <a href="newfilm.php">
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
                                                <i style="transform: rotate(5deg);" class="fa fa-cogs" aria-hidden="true"></i>  Edit profile</a>
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
    <!-- end navbar -->
    </header>
    <!-- end header -->
    <nav class="breadcrumb container" style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">New Film</li>
        </ol>
    </nav>

    <section class="newFilm" id="newFilm">
        <div class="container d-flex flex-wrap">
            <div class="newFilmDiv mx-1 my-3 p-0 position-relative ">
                <div class="newFilm__overlay"></div>
                <img src="images/best-netflix-selena-jumbo-v2.jpg" class="newFilmImage" alt="">
                <div class="newFilm__subtitle my-2 w-50  ">
                    <strong>movie name</strong>
                    <small class="my-1">movie type</small>
                    <a href="#" class="btn btn-outline-warning mt-1 ">
                        watchNow
                    </a>
                </div>
            </div>

            <div class="newFilmDiv mx-1 my-3 p-0 position-relative ">
                <div class="newFilm__overlay"></div>
                <img src="images/best-netflix-selena-jumbo-v2.jpg" class="newFilmImage" alt="">
                <div class="newFilm__subtitle my-2 w-50  ">
                    <strong>movie name</strong>
                    <small class="my-1">movie type</small>
                    <a href="#" class="btn btn-outline-warning mt-1 ">
                        watchNow
                    </a>
                </div>
            </div>

            <div class="newFilmDiv mx-1 my-3 p-0 position-relative ">
                <div class="newFilm__overlay"></div>
                <img src="images/best-netflix-selena-jumbo-v2.jpg" class="newFilmImage" alt="">
                <div class="newFilm__subtitle my-2 w-50  ">
                    <strong>movie name</strong>
                    <small class="my-1">movie type</small>
                    <a href="#" class="btn btn-outline-warning mt-1 ">
                        watchNow
                    </a>
                </div>
            </div>
        </div>
    </section>



    <!-- start scroll Up arrow -->
    <div style="background-color: steelblue;" class="scrollUp ">
        <a href="#newFilm"><i class="fas fa-arrow-up "></i></a>
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
                <form action="/film/includes/addUser.php" enctype="multipart/form-data" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="userFirstName">First Name *</label>
                            <input type="text" class="form-control form-control-sm" name="userFirstName"
                                id="userFirstName" aria-describedby="helpId" required="required" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="userSecondName">Last Name *</label>
                            <input type="text" class="form-control form-control-sm" name="userSecondName"
                                id="userSecondName" aria-describedby="helpId" required="required" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Email *</label>
                            <input type="email" class="form-control form-control-sm" name="userEmail" id="userEmail"
                                aria-describedby="helpId" required="required" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="userPass">Password *</label>
                            <input type="password" class="form-control form-control-sm" name="userPass" id="userPass"
                                required="required" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="userImage"> Image</label>
                            <input type="file" class="form-control form-control-sm" name="userImage" id="userImage"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="userDOB">Date Of Birth *</label>
                            <input type="date" class="form-control form-control-sm" name="userDOB" id="userDOB"
                                aria-describedby="helpId" required="required" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="userCountry"> Country *</label>
                            <div class="form-group">
                                <select id="userCountry" class="form-control" name="userCountry">
                                    <option value="Syria">Syria</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="userCity"> City *</label>
                            <div class="form-group">
                                <select id="userCity" class="form-control" name="userCity">
                                    <option value="tartous">tartous</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn text-white bg_orange">Register</button>
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
            <p>Copyright &copy; 2021 <span style="color: steelblue;">FILM WATCH NOW</span>. AllRights Reserved</p>
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

</body>

</html>
<?php } ?>
<?php redirect("index.php");?>