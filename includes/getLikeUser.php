<?php
session_start();
if(isset($_SESSION['userId'])){
    $userId=$_SESSION['userId'];
}
else if(isset($_SESSION['loginAdmin'])){
    $userId=$_SESSION['loginAdmin'];
}


$getLikeUser="SELECT * FROM `likes` WHERE `likeUser`='$userId' AND `likeBlog`='$blogId' ";
$getLikeUserResult=mysqli_query($conn,$getLikeUser);
if(mysqli_num_rows($getLikeUserResult) > 0){
    ?>
    <script>$('.likeChecked').prop('checked',true)</script>
    <?php
}
else{
?>
<script>$('.likeChecked').prop('checked',false)</script>
<?php
}