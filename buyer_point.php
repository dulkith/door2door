<?php include 'header.php';

//check if the get variable exists
if (isset($_GET['addFavouriteFood'])) {
    $strJsonFileContents = file_get_contents("data.json");
    $itemsArray = json_decode($strJsonFileContents, true);

    foreach ($itemsArray as $item) {
        if ($item['id'] == $_GET['addFavouriteFood']) {
//            if (in_array($_GET['addFavouriteFood'], $item)) {
//                echo '<script>alert("This item already in favourite list.")</script>';
//            } else {
//
//                array_push($_SESSION['favourite'], $item);
//            }
            array_push($_SESSION['favourite'], $item);

        }
    }
}

$favourite = $_SESSION['favourite'];
// remove
if (isset($_GET['itemIdRemove'])) {
    foreach ($favourite as $key => $item) {
        if ($item['id'] == $_GET['itemIdRemove']) {
            unset($favourite[$key]);
            $_SESSION['favourite'] = $favourite;
            break;
        }
    }

}
$favourite = $_SESSION['favourite'];

$points = $_SESSION['points'];
?>

<div id="sideNavigation" class="sideNavigation" onclick="navClose()">
    <div class="logo">
        <img class="logo_white_login" src=" images/logo_white.png" alt="logo "><br>
    </div>
    <?php include 'menu.php'; ?>
    <?php include 'ipadmenu.php'; ?>
</div>

<div data-role="header" data-position="fixed" class="header-bar">
    <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
    <i class="fa fa-chevron-left previous" onclick="goBack()"></i>
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">PROFILE</h1>
</div>

<div class="cotainer2">
    <div class="grid-container-profile">
        <div class="one-profile" style="margin-left:20px; margin-top:20px; text-align:center;">
            <i class="fa fa-user fa-5x" style="color:black;"></i>
            <h3 class="" style="color:black;">LEVEL3</h3>
        </div>
        <div class="two-profile">
            <h2>Kasun Maduwantha</h2>
            <p>No: 90/1, Pagoda Road, Nugegoda, Colombo</p>
            <p>kasunmaduwantha23@gmail.com</p>
            <p>0776543523</p>

            <a href="buyer_login.php" rel="external">
                <button class="logout" style="width:50%; color:#ffffff; margine-right:20px; font-size:10px;">LOGOUT
                </button>
            </a>

        </div>
    </div>


    <div role="main" class="">
        <div data-role="tabs">
            <div data-role="navbar">
                <ul>
                    <li><a href="#fragment-1" class="ui-btn-active">Favourite</a></li>
                    <li><a href="#fragment-2">Orders</a></li>
                    <li><a href="#fragment-3">Points</a></li>
                </ul>
            </div>
            <div id="fragment-3">
                <h3 class="point-section">Receive a <span class="" style="color:red;"> Rs 500.00 reward </span> for
                    every
                    100 points earned.!</h3>

                <div class="myProgress">
                    <div class="myBar" style="width: <?php echo $points ?>%;"></div>
                </div>
                <p class="persentage">
                    <?php echo $points ?>/100<br>
                    POINTS
                </p>

                <p style="font-size: 12px; font-weight: 100" class="point-para">
                    (Earn 1 point for every Rs.100.00 spent)<br><br><br>
                </p>
                <p class="point-para" style="font-size: 22px; font-weight: 900; color: #242424">
                    Available balance Rs. <?php echo $points * 0.5 ?>.00
                </p>
                <br>
                <br>
                <a href="buyyer_levelup.php" rel="external">
                    <div class="ui-bar ui-bar-a profile-button" style="border-radius:10px; font-size:24px;">REDEEM</div>
                </a>
            </div>

            <div id="fragment-2" style="max-width:350px; margin-left:auto; margin-right:auto; margin-top:20px;">
                <div class="border-order">
                    <h3 class="" style="margin-left:10px; font-size:18px;">ORDER ID- #2013456</h3>

                    <div class="grid-container-order">
                        <div class="one" style="margin-left:10px; font-size:12px;">
                            <p>Finger Chicken X1<br>
                                Kibula Banis X2 <br>
                                Roos Paan X5</p>
                        </div>
                        <div class="two" style="margin-left:10px; font-size:12px;">
                            <p>LKR 275.00<br>
                                2021-01-18<br> 11.00p.m</p>
                            <h1 class="inprogress" style="font-size:18px;">INPROGRESS</h1>
                        </div>
                    </div>
                </div>
                <div class="border-order" style="margin-top:10px;">
                    <h3 class="" style="margin-left:10px; font-size:18px;">ORDER ID- #2013456</h3>

                    <div class="grid-container-order">
                        <div class="one" style="margin-left:10px; font-size:12px;">
                            <p>Finger Chicken X1<br>
                                Kibula Banis X2 <br>
                                Roos Paan X5</p>
                        </div>
                        <div class="two" style="margin-left:10px; font-size:12px;">
                            <p>LKR 275.00<br>
                                2021-01-18<br> 11.00p.m</p>
                            <h1 class="inprogress" style="font-size:18px;">INPROGRESS</h1>
                        </div>
                    </div>
                </div>
                <div class="border-order" style="margin-top:10px;">
                    <h3 class="" style="margin-left:10px; font-size:18px;">ORDER ID- #2013456</h3>

                    <div class="grid-container-order">
                        <div class="one" style="margin-left:10px; font-size:12px;">
                            <p>Finger Chicken X1<br>
                                Kibula Banis X2 <br>
                                Roos Paan X5</p>
                        </div>
                        <div class="two" style="margin-left:10px; font-size:12px;">
                            <p>LKR 275.00<br>
                                2021-01-18<br> 11.00p.m</p>
                            <h1 class="inprogress" style="font-size:18px;">INPROGRESS</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fragment-1">

                <div class="">
                    <?php
                    $strJsonFileContents = file_get_contents("data.json");
                    $array = json_decode($strJsonFileContents, true);
                    ?>

                    <div>
                        <div class="carosol-today-deal">
                            <div class="title-deal">
                                <p style="color:hsl(240, 70%, 22%)">
                                <div style="font-size: 12px; margin-top: -5px; margin-bottom: -10px;font-weight: 600;"><?php echo count($favourite) ?>
                                    items
                                    listed
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="foodsList" style="margin-top: 20px">

                    <?php foreach ($favourite as $value) { ?>

                        <div class="grid-container">

                            <a href="buyer_point.php?itemIdRemove=<?php echo $value['id'] ?>" rel="external">
                                <i class="fa fa-times-circle fa-lg close-icon" style="color:#E84C4F;"></i>
                            </a>

                            <div class="foodImage">
                                <a href="buyer_item.php?itemId=<?php echo $value['id'] ?>" rel="external">
                                    <img src="assets/images/favourite/<?php echo $value['image'] ?>" style="width:100%">
                                </a>
                            </div>
                            <div class="foodTitle">
                                <h5><?php echo $value['title'] ?></h5>
                                <p style="font-size: 9px; margin-top: -20px">White Rice, Potato, Soya, Papadam</p>
                            </div>
                            <div class="foodPrice"><span
                                        style="font-size: 12px; font-weight: 900;">Rs <?php echo $value['price'] ?></span>
                            </div>
                            <div class="foodDelivery"><i class="fa fa-truck"></i> <span
                                        style="font-size: 11px; font-weight: 100;">Free delivery</span>
                            </div>

                            <div class="addToCart">
                                <!--
                    <a href="?addFavouriteFood=<?php echo $value['id'] ?>" rel="external"><button data-role="none" type="submit" value="Submit" class="sendicon"><i class="fa fa-heart" style="color:white;"></i></button></a>
                    <a href="buyer_item.php?itemId=<?php echo $value['id'] ?>" rel="external"><button data-role="none" type="submit" value="Submit" class="sendicon"><i class="fa fa-shopping-cart" style="color:white;"></i></button></a>
-->
                                <a href="?addFavouriteFood=<?php echo $value['id'] ?>" rel="external">
                                    <div class="ui-bar ui-bar-a profile-button"
                                         style="border-radius:10px; font-size:12px; margin-right:10px; margin-bottom:4px; max-width:200px;">
                                        <i class="fa fa-cart-plus"></i> ADD TO CART
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                    <a id="prodPromoCode" href="#promopop" onclick="" data-rel="popup" data-transition="pop">
                        <div class="ui-bar ui-bar-b profile-button-b"
                             style="border-radius:10px; font-size:20px; margin-top:25px; margin-bottom:25px; text-align: center">
                            <i class="fa fa-share-square"></i> SHARE BY EMAIL
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="margin: 10px; padding: 10px;" id="promopop" data-role="popup" data-dialog="true" data-transition="pop"
     data-position-to="window">

    <div data-role="header" data-theme="c">
    </div>

    <label style="margin: 5px; padding: 5px;" for="popupBasic">Enter Email Address:</label>
    <input style="margin: 5px; padding: 5px;" type="text" name="name" id="promoInput" value="">

    <a style="text-align: center" href="" data-role="button" data-inline="true" data-rel="back"><i
                class="fa fa-share"></i> Share</a>

</div>
<br>

<script>
    function navOpen() {
        document.getElementById("sideNavigation").style.width = "250px";
    }

    function navClose() {
        document.getElementById("sideNavigation").style.width = "0";
    }
</script>

<?php include 'bottom_navigation.php'; ?>

<?php include 'footer.php'; ?>
