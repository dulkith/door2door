<?php include 'header.php';
//$_SESSION['points'] = 0;
$points = $_SESSION['points'];
if($points >= 0){
    $_SESSION['points'] = $points - 10;
} else {
    /* Redirect browser */
    header("Location: http://localhost/door2door/buyer_point.php");
    exit();
}
?>

<div id="sideNavigation" class="sideNavigation" onclick="navClose()">
    <div class="logo">
        <img class="logo_white_login" src=" images/logo_white.png" alt="logo "><br>
    </div>
    <?php include 'menu.php'; ?>
</div>

<div data-role="header" data-position="fixed" class="header-bar">
    <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
    <i class="fa fa-chevron-left previous" onclick="goBack()"></i>
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">LEVEL UP</h1>
</div>

<img class="level-image" src=" assets/images/favourite/level.png" alt="logo ">

<div class="level-content">
    <h1 class="level-header">LEVEL 3</h1>
    <p class="level-para" style="font-size: 16px; font-weight: 100;">Congratulation <br>
        You've reached level 3 now.</p>
</div>

<a href="buyer_point.php" rel="external">
    <div class="ui-bar ui-bar-a level-button profile-button" style="border-radius:10px; font-size:24px; margin: 20px;">
        CONTINUE
    </div>
</a>

<?php include 'bottom_navigation.php'; ?>

<script>
    function navOpen() {
        document.getElementById("sideNavigation").style.width = "250px";
    }

    function navClose() {
        document.getElementById("sideNavigation").style.width = "0";
    }

</script>
<?php include 'footer.php'; ?>
