<?php
//session_start();
$path="C:/xampp/htdocs/gradProject/film/" ;
require($path."handlers/db.php");
require($path."admin/handlers/get-cats.php"); 
require("handlers/get-myList.php");
$video=selectAll('video');

?>

<!DOCTYPE html>
<html>
<style>
    * {
     box-sizing: border-box;
    }

    div.position {
  position: absolute;
  right: 0px;
  width: 0px;
  height: 500px;
  padding: 10px;
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
    .close {
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
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
    <nav><br>
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
           
        </div>
        </div>
        </div>
    </nav>
    </header>

    <div class="container">
  <div class="row">
      <div class="col-4">
          
    <div  style="background-color:#333333; margin-left:-30px; margin-top:40px; width:260px; padding: 20px;" id="vayvo-progression-author-sidebar">
	
    <div id="content-sidebar-info">
        

        <div id="avatar-sidebar-large-profile" style="background-image:url('//vayvo.progressionstudios.com/wp-content/uploads/armember/armFileD2Fsw_profileimagevayvo.jpg')"></div>
        <div  id="profile-sidebar-gradient"></div>
           <a href="update-user-info.php" style="color:steelblue" class="edit-profile-sidebar">Edit</a>
            
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      name <input type="text" name="userFirstName"> <br/>
    <br/>
    email <input type="text" name="userEmail"> <br/>
    <br/>
    password <input type="password" name="userPass"> <br/>
    <br/>
    <input type="submit" name="edit" value="UPDATE DATA" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        </div><!-- close .content-sidebar-info -->
        <br>
        <div id="vayvo-profile-sidebar-name">
            <h5 style="font-size: 16px; font-family: Monaco, Courier New, monospace; text-align: center;" ><img src="<?= URL ?>upload/<?=$_SESSION['myphoto'];?>" style="width: 200px; height:200px; border-radius: 50%;"></h5>								 											
        </div>

        <div id="vayvo-profile-sidebar-name">
            <h5 style="font-size: 16px; font-family: Monaco, Courier New, monospace; text-align: center;" ><?= $_SESSION['userName']?></h5>								 											
            <h5 style="font-size: 16px; font-family: Monaco, Courier New, monospace; text-align: center;" ><?= $_SESSION['userEmail']?></h5>								 											

        </div>
            <hr>

        <div class="content-sidebar-section">
            <h5 style="font-size: 16px; font-family: Monaco, Courier New, monospace;" class="content-sidebar-sub-header">Member Since</h5>
        <div  class="content-sidebar-simple-text"><h5 style="font-size: 13px; font-family: Monaco, Courier New, monospace;"><?= $_SESSION['date']?></h5></div>
                                                        
        </div> <!-- close .content-sidebar-section -->
            <hr>

        <div class="content-sidebar-section"> 
            <h5  style="font-size: 16px; font-family: Monaco, Courier New, monospace;" >Biography</h5>
        <div class="content-sidebar-biography-text"> <h5 style="font-size: 14px; font-family: Monaco, Courier New, monospace;"><?= $_SESSION['bio']?></h5></div>
        </div><!-- close .content-sidebar-section -->
                                                    
</div>
      </div>
    <div class="col-4">
    <a href="#" style="width: 425px; heighT:50px; margin-left:-90px; margin-top:40px;" class="btn btn-outline-dark">Watchlist</a>
    </div>
    <div class="col-4">
     
    <a href="#" style="width: 425px; heighT:50px; margin-left:-7px; margin-top:40px;" class="btn btn-outline-dark">Reviews</a>
    </div>

  </div>

  </div>

<div class="row">
    <div class="col-4"	>
    </div>		  
	<!-- end ARMember Actionvation Check -->
<div class="col-4" style="margin-top: -500px;">
<!---------------------------------------------------->
<?php foreach ($myList as $list) : ?>
    <div class="container comment" style="margin: 20px;">
        <span style="font-size: 13px;" class="comments__time"><?= $list['2'] ?></span>
    </div>
<?php endforeach; ?>
<!---------------------------------------------------->
 				
    </div>	
</div>
    <!-- end header -->


    <!-- end header -->

    <!-- end top movies in 2019  section-->

    <!-- start scroll Up arrow -->
    <div style="background-color: steelblue;" class="scrollUp ">
    
        <a href="#home "><i class="fas fa-arrow-up "></i></a>
    </div>
    <!-- end scroll Up arrow -->


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
    <script src="js/jquery.min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="js/bootstrap.min.js "></script>




    <!-- include mixitup library for trending tvshow -->
    <script src="js/mixitup/mixitup.min.js "></script>
    <script src="js/mixitup/mainMix.js "></script>
    <!-- incluse slick file for slider  -->
    <script src="js/slick_slider/slick.min.js "></script>
    <!-- include the main file javascript -->
    <script src="js/main.js "></script>
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

</html>

</html>

</html>