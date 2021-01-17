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
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">FIND IN MAP</h1>
</div>

<div class="cotainer2">

    <input type="text" class="ui-input-text ui-body-a" name="" id="searchinput1"
           placeholder=" Search Near by Food Items..." value="" data-type="search"
    <div data-role="fieldcontain">

        <div class="store-detail-container">
            <div class="store-detail-container">

                <section class="store-detail-list">
                    <div role="main" id="map">
                    </div>
                </section>

            </div>
            <div>
                <div class="carosol-today-deal">
                    <div class="scrollmenu">
                        <table class="change-table">
                            <tr>
                                <td class="gap-product">
                                    <div class='card card-view'>
                                        <img class='card-img-top card-image'
                                             src="assets/images/favourite/Rice-Curry.png">
                                        <hr class="product-hr">
                                        <div class='card-body'>
                                            <p class="product-name">Rice-Curry</p>

                                            <h5 class="price-tag">LKR 250.00</h5>
                                            <p class="discount"> 10% off</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="gap-product">
                                    <div class='card card-view'>
                                        <img class='card-img-top card-image'
                                             src="assets/images/favourite/String-Hoppers.jpg">
                                        <div class='card-body'>
                                            <hr class="product-hr">
                                            <p class="product-name">String Hoppers</p>

                                            <h5 class="price-tag">LKR 250.00</h5>
                                            <p class="discount"> 10% off</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="gap-product">
                                    <div class='card card-view'>
                                        <img class='card-img-top card-image'
                                             src="assets/images/favourite/Garlic-Prawns.png">
                                        <hr class="product-hr">
                                        <div class='card-body'>
                                            <p class="product-name">Garlic Prawns</p>

                                            <h5 class="price-tag">LKR 550.00</h5>
                                            <p class="discount"> 15% off</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="gap-product">
                                    <div class='card card-view'>
                                        <img class='card-img-top card-image'
                                             src="assets/images/favourite/Strawberry-Cheesecake.jpg">
                                        <hr class="product-hr">
                                        <div class='card-body'>
                                            <p class="product-name">Strawberry Cheesecake</p>

                                            <h5 class="price-tag">LKR 1650.00</h5>
                                            <p class="discount"> 20% off</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="gap-product">
                                    <div class='card card-view'>
                                        <img class='card-img-top card-image'
                                             src="assets/images/favourite/White-Chocolate-Raspberry-Cheesecake.jpg">
                                        <div class='card-body'>
                                            <hr class="product-hr">
                                            <p class="product-name">Raspberry Cheesecake</p>

                                            <h5 class="price-tag">LKR 2500.00</h5>
                                            <p class="discount"> 10% off</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="gap-product">
                                    <div class='card card-view'>
                                        <img class='card-img-top card-image'
                                             src="assets/images/favourite/Fish-curry.jpg">
                                        <hr class="product-hr">
                                        <div class='card-body'>
                                            <p class="product-name">Fish Curry</p>

                                            <h5 class="price-tag">LKR 250.00</h5>
                                            <p class="discount"> 15% off</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>

            </div>

            <?php include 'bottom_navigation.php'; ?>
        </div>


        <script>
            function navOpen() {
                document.getElementById("sideNavigation").style.width = "250px";
            }

            function navClose() {
                document.getElementById("sideNavigation").style.width = "0";
            }
        </script>
<?php include 'footer.php'; ?>