<?php include 'header.php'; ?>

<div id="sideNavigation" class="sideNavigation" onclick="navClose()">
    <div class="logo">
        <img class="logo_white_login" src=" images/logo_white.png" alt="logo "><br>
    </div>
    <?php include 'menu.php'; ?>
</div>

<div data-role="header" data-position="fixed" class="header-bar">
    <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
        <i class="fa fa-chevron-left previous" onclick="goBack()"></i>
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">PROFILE</h1>
</div>

<div class="grid-container-profile">
    <div class="one-profile" style="margin-left:20px; margin-top:20px; text-align:center;">
        <i class="fa fa-user fa-5x"></i>
        <h3>LEVEL3</h3>
    </div>
    <div class="two-profile">
        <h2>Kasun Maduwantha</h2>
        <p>No: 90/1, Pagoda Road, Nugegoda, Colombo</p>
        <p>kasunmaduwantha23@gmail.com</p>
        <p>0776543523</p>
        <button class="logout" style="width:50%; color:#ffffff; margine-right:20px; font-size:10px;">LOGOUT</button>

    </div>
</div>


<div role="main" class="ui-content">
    <div data-role="tabs">
        <div data-role="navbar">
            <ul>
                <li><a href="#fragment-1" class="ui-btn-active">Points</a></li>
                <li><a href="#fragment-2">Recent Orders</a></li>
                <li><a href="#fragment-3">Favourite</a></li>
            </ul>
        </div>
        <br>
        <div id="fragment-1">
            <h3 class="point-section">Receive a <span class="" style="color:red;"> Rs 500.00 reward </span> for every
                100 points earned.!</h3>

            <div class="myProgress">
                <div class="myBar" style="width:70%;"></div>
            </div>
            <p class="persentage">
                65/100<br>
                POINTS
            </p>

            <p style="font-size: 12px; font-weight: 100" class="point-para">
                (Earn 1 point for every Rs.100.00 spent)<br><br><br>
            </p>
            <p class="point-para" style="font-size: 22px; font-weight: 900; color: #242424">
                Available balance Rs.350
            </p>
            <br>
            <br>
            <a href="buyyer_levelup.php" rel="external">
                <div class="ui-bar ui-bar-a profile-button" style="border-radius:10px; font-size:24px;">REDEEM</div>
            </a>
        </div>
        <div id="fragment-2" style="max-width:350px; margin-left:auto; margin-right:auto;">
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


        <div id="fragment-3">
            <div class="cotainer2">
                <?php
    $strJsonFileContents = file_get_contents("data.json");
    $array = json_decode($strJsonFileContents, true);
    ?>

                <div>
                    <div class="carosol-today-deal">
                        <div class="title-deal">
                            <p style="color:hsl(240, 70%, 22%)">
                            <div style="font-size: 12px; margin-top: -5px; margin-bottom: -10px;font-weight: 600"><?php echo count($array) ?>
                                items
                                listed
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="foodsList" style="margin-top: 20px">
                <?php foreach ($array as $value) { ?>
                <div class="grid-container-favourite ">
                    <i class="fa fa-times-circle fa-lg close-icon" style="color:#E84C4F;"></i>
                    <div class="foodImage" style="width:120px;">
                        <a href="" data-rel="popup" data-position-to="window">
                            <img src="assets/images/favourite/<?php echo $value['image'] ?>" style="width:80%">
                        </a>
                    </div>
                    <div class="foodTitle">
                        <h5><?php echo $value['title'] ?></h5>
                        <p style="font-size: 9px; margin-top: -20px">White Rice, Potato, Soya, Papadam</p>
                    </div>
                    <div class="foodPrice" style="margin-top:-10px; margin-bottom:10px;"><span style="font-size: 12px; font-weight: 900; ">Rs <?php echo $value['price'] ?></span></div>


                    <a href="buyer_cart.php" rel="external">
                        <div class="ui-bar ui-bar-a profile-button" style="border-radius:10px; font-size:12px; margin-right:10px; margin-bottom:4px;">ADD TO CART</div>
                    </a>

                    <a href="buyer_checkout.php" rel="external">
                        <div class="ui-bar ui-bar-a profile-button" style="border-radius:10px; font-size:12px; margin-right:10px; margin-bottom:10px;">SHARE
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>

        </div>
    </div>
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
