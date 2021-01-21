<?php include 'header.php';

$_SESSION['cart'] = [];
$_SESSION['points'] = $_SESSION['points'] + 10;

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
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">ORDER CONFIRMED</h1>
</div>

<div class="confirm-image">
    <img class="logo_white_login" style="width:75%;" src=" assets/images/favourite/confirm.png" alt="logo "><br>
</div>

<div class="" style="text-align:center;">
    <h2>Your Order is Confirmed</h2>
    <p>Order number: #32232342</p>
</div>

<div class="" style="color:#E84C4F; text-align:center;">
    <p>We'll deliver your order immediately.<br>
        make sure your order put on the doorstep</p>
</div>
<br>

<div class="" style="text-align:center;">
    <h2>You earn 10 points</h2>
</div>

<a href="buyer_home.php" rel="external">
    <div class="ui-bar ui-bar-a profile-button" style="border-radius:10px; font-size:22px; margin:40px;">BACK TO HOME</div></a>

<?php include 'footer.php'; ?>
