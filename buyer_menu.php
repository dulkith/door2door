<?php include 'header.php'; ?>

<div id="sideNavigation" class="sideNavigation" onclick="navClose()">
    <div class="logo">
        <img class="logo_white_login" src=" images/logo_white.png" alt="logo "><br>
    </div>
    <?php include 'menu.php'; ?>
</div>

<div data-role="header" data-position="fixed" class="header-bar">
    <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
    <i class="fa fa-chevron-left previous"></i>
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">MENU</h1>
</div>

<div class="cotainer2">

    <input type="text" class="ui-input-text ui-body-a" name="" id="searchinput1" placeholder=" Search Food Items..."
           value="" data-type="search"
    <div data-role="fieldcontain">

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
                    <span class=padd-title>
                        </span>
                    <div style="color: rgb(232, 76, 79); font-size: 14px; float: right; margin-top: -6px; margin-right: 6px;"
                         class="al-sell-all-tab">
                        Sort by
                        <a data-sort-by=".name" href="#">Name</a>
                        <a data-sort-by=".price" href="#">Price</a>
                        <i class="fa fa-sort"></i>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="foodsList">

        <?php foreach ($array as $value) { ?>

            <div class="grid-container">
                <div class="foodImage">
                    <a href="" data-rel="popup" data-position-to="window">
                        <img src="assets/images/favourite/<?php echo $value['image'] ?>" style="width:100%">
                    </a>
                </div>
                <div class="foodTitle">
                    <h5><?php echo $value['title'] ?></h5>
                    <p style="font-size: 9px; margin-top: -20px">White Rice, Potato, Soya, Papadam</p>
                </div>
                <div class="foodPrice"><span
                            style="font-size: 12px; font-weight: 900;">Rs <?php echo $value['price'] ?></span></div>
                <div class="foodDelivery"><i class="fa fa-truck"></i> <span style="font-size: 11px; font-weight: 100;">Free delivery</span>
                </div>

                <div class="addToCart">
                    <a href="?addFavouriteFood=<?php echo $value['id'] ?>" rel="external" class="ui-btn ui-btn-inline ui-btn-a"><i
                                class="fa fa-heart"></i></a>
                    <a href="buyer_item.php?itemId=<?php echo $value['id'] ?>" rel="external" class="ui-btn ui-btn-inline ui-btn-a"><i
                                class="fa fa-shopping-cart"></i></i></a>
                </div>
            </div>
        <?php } ?>

    </div>

    <?php
    //check if the get variable exists
    if (isset($_GET['addFavouriteFood'])) {
        addFavourite($_GET['addFavouriteFood']);
    }

    function addFavourite($res)
    {
        if (in_array($res, $_SESSION['favourite'])) {
            echo $res;
            //real search code goes here
            echo '<script>alert("This item already in favourite list.")</script>';
//            echo "<script> window.onload = function() {alreadyInFavourite();}; </script>";

        } else {
            echo $res;
            array_push($_SESSION['favourite'], $res);
            var_dump($_SESSION['favourite']);
        }
    }

    ?>

    <div id="popupAlready" data-role="popup" data-dialog="true" data-transition="pop"
         style="width: 300px; border: none;">

        <div data-role="header" data-theme="b" style="border: none; background-color: rgb(232, 76, 79) !important;">
            <h1 style="font-size: 12px; text-shadow: none; font-weight: 600; letter-spacing: 1px;">
                Successful</h1>
        </div>

        <div role="main" class="ui-content">
            <p style="text-align: center; font-size: 13px; letter-spacing: 1px;">Your payment is successful.<br>You have
                won
                10 points for the transection. </br>Thank you !</p>
            <a href="" class="ui-btn ui-shadow ui-btn-b" onclick="closeAlreadyInFavourite()"
               style="background-color: rgb(232, 76, 79) !important; font-size: 13px;border: none; text-shadow: none; font-weight: 100;">OK</a>
        </div>
    </div>

    <?php include 'bottom_navigation.php'; ?>

    <script>
        function navOpen() {
            document.getElementById("sideNavigation").style.width = "250px";
        }

        function navClose() {
            document.getElementById("sideNavigation").style.width = "0";
        }

        // message
        function alreadyInFavourite() {
            $("#popupAlready").popup("open");
        }

        function closeAlreadyInFavourite() {
            $("#popupAlready").popup("hide");

        }

        // sort
    </script>

    <?php include 'footer.php'; ?>
