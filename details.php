<?php

$path = "C:/xampp/htdocs/gradProject/film/";
require($path . "handlers/db.php");
require("handlers/get-video-details.php");
require($path."admin/handlers/get-cats.php"); 

require("handlers/get-comments.php");

if($_SESSION['Types']==1){
    Aredirect("index.php");
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Example of Embedding YouTube Video inside Bootstrap Modal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LamaSaad">
    <meta name="keywords" content="film , movies,tv show,tv series,play,watch now">
    <meta name="description" content="film is a website to show different type of movies, play,tv shows and tv series for kids and adult">
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
        /*.chip {
  display: inline-block;
  padding: 0 25px;
  height: 40px;
  font-size: 18px;
  line-height: 40px;
  border-radius: 25px;
}*/

        .chip {
            display: inline-block;
            padding: 0 25px;
            height: 50px;
            font-size: 18px;
            line-height: 50px;
            border-radius: 25px;
            background-color: #f1f1f1;

        }

        .chip img {
            float: left;
            margin: 0 10px 0 -25px;
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }

        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
        }

        .modal-body {
            position: relative;
            padding: 0px;
        }

        .close {
            position: absolute;
            right: -30px;
            top: 0;
            z-index: 999;
            font-size: 2rem;
            font-weight: normal;
            color: #fff;
            opacity: 1;
        }

        .topleft {
            position: absolute;
            top: 340px;
            left: 60px;
            font-size: 18px;
            padding: 5px;
        }
    </style>

    <script>
        $(document).ready(function() {
            /* Get iframe src attribute value i.e. YouTube video url
            and store it in a variable */
            var url = $("#cartoonVideo").attr('src');

            /* Assign empty url value to the iframe src attribute when
            modal hide, which stop the video playing */
            $("#myModal").on('hide.bs.modal', function() {
                $("#cartoonVideo").attr('src', '');
            });

            /* Assign the initially stored url back to the iframe src
            attribute when modal is displayed again */
            $("#myModal").on('show.bs.modal', function() {
                $("#cartoonVideo").attr('src', url);
            });
        });
    </script>

</head>


<body>
    <!-- start header -->
    <nav>
        <header style="background:transparent ; border: 0.2px steelblue; border-bottom-style: solid;">
            <div class="container d-flex py-1  position-relative ; ">
                <input type="checkbox" name="" id="check">
                <div class="logo">
                    <br>
                    <a href="index.php">

                        <img src="images/logo3.png" alt="film logo" class="img-fluid logo__image">
                        <div class="logo__brand; margin:10px; ">
                            <br>
                            <h5 style="color:steelblue; ">WATCH</h5>
                        </div>
                    </a>
                </div>

                <div class="navbar">
                    <div class="navbar__list"><br>
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
                                                        <li class="dropdown__link"><?php foreach ($getCats as $cat) { ?>
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

      <form method="get" action="#">
<input class="header__form-input" type="text" name="name" placeholder="I'm looking for...">
<button type="submit"></button>

</form>
</div>

                </div>
                <div class="navbar__sign" style="--i: 1.8s">

                    <?php if (isset($_SESSION['userId'])) { ?>

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
                                            <a style="color:white; padding:17px; font-size:13px; " href="profile.php"> <span class="progression-studios-menu-title">
                                                    <i style="transform: rotate(3deg);" class="fa fa-user-circle" aria-hidden="true"></i> My Profile</a>
                                            </span>
                                        </li>

                                        <li style="height:30px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
                                            <a style="color:white; padding:17px; font-size:13px;" href="update-user-info.php"> <span class="progression-studios-menu-title">
                                                    <i style="transform: rotate(5deg);" class="fa fa-cogs" aria-hidden="true"></i> Edit profile</a>
                                            </span>
                                        </li>

                                        <li style="height:30px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
                                            <a href="handlers/logout.php" style="color:whitesmoke; padding:17px; font-size:13px;">
                                                <span class="progression-studios-menu-title"><i style="transform: rotate(5deg);" class="fa fa-power-off" aria-hidden="true"></i> Log Out</span></a>
                                        </li>
                                    </ul>

                                </div>
                            <?php } ?>

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



    <!----------------HTML $ JAVA SCRIPT CODE--------------->

    <div class="container">
        <div class="home__content__btn">

            <div class="mx-auto d-block">
                <a href="#myModal" class="fa fa-play-circle; " data-toggle="modal">
                    <img
                     src="<?= AURL ?>uploades/<?= $videoDetails['poster']; ?>" />
                </a>
            </div>
            <div style="position:relative; right:840px; top:290px;">
                <!-- article content -->
                <h5><?= $videoDetails['name']; ?></h5>

                <small><?= $videoDetails['startDate']; ?></small>

                <p><?= $videoDetails['describtion']; ?></p>

                <!--  <a href="handlers/add_ToList.php" class="fa fa-plus-circle" style="color:white; ">Add to my List</a>-->
                <form class="btn-group" style="margin:15px;" method="post" action="handlers/add_ToList.php" class="comments__form">
                    <button style="height:33px; width:130px; border-radius: 15px ; font-size:15px;" type="submit" class="fa fa-plus-circle btn btn-outline-light"> add to myList</button>
                    <input type="hidden" name="userId" value="<?= ($_SESSION['userId']) ?>" />
                    <input type="hidden" name="videoId" value="<?= $id ?>" />
                </form>

                <a href="" class="fa fa-share" style="color:white; text-indent: 30px;">share</a>
            </div>

            <div">
                <!-- Modal HTML -->
                <div class="bs-example">
                    <div class="container">

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div>
                                        <video id="myVideo" width="100%" height="350" controls>
                                            <source src="<?= AURL ?>uploades/<?= $videoDetails['video']; ?>" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
    </div>
</body>

</html>

<!-------------END OF HTML AND JAVA SCRIPT MODAL CODE--------------->

</div>

</div>
</div>
<br>
<br>
<br>

<h5 style=" position:relative; left:26px; top:80px; margin:70px;">Comments</h5>

<div style="border-radius: 15px; border: 1px outset steelblue; margin:80px;">

    <?php foreach ($commentDetails as $comment) : ?>
        <div class="container comment" style="margin: 20px;">
            <hr>
            <span class="comments__name"> <?= $comment['3']; ?></span>
            <br>
            <span style="font-size: 13px;" class="comments__time"><?= $comment['2'] ?></span>

            <p> <?= $comment[1] ?> </p>

            <?php
            $delUrl = "handlers/delete-comment.php?videoid=".$id."&&commentid=".$comment['0'];
            ?>

            <a href="<?=$delUrl ?>" class="btn-outline-light"> delete</a>

        </div>

    <?php endforeach; ?>

</div>

<br>
<div style="background:transparent; border-radius: 15px; border: 1px outset steelblue; width:500px; margin:80px;">

    <form style="margin:20px;" method="post" action="handlers/add-comment.php" class="comments__form">
        <div class="sign__group">
            <textarea rows="5" cols="55" style="border-radius: 15px ;" id="text" name="text" class="sign__textarea" placeholder="Add comment"></textarea>
            <br>

            <button style="height:33px; width:80px; border-radius: 15px ;" type="submit" class="bnt btn-info">Send</button>
        </div>

        <input type="hidden" name="userId" value="<?= ($_SESSION['userId']) ?>" />
        <input type="hidden" name="videoId" value="<?= $id ?>" />

    </form>
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