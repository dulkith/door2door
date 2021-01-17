<?php include 'header.php'; ?>

    <div id="sideNavigation" class="sideNavigation" onclick="navClose()">
        <div class="logo">
            <img class="logo_white_login" src=" images/logo_white.png" alt="logo "><br>
        </div>
        <?php include 'menu.php'; ?>
    </div>

    <div data-role="header" data-position="fixed" class="header-bar">
        <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
        <i class="fa fa-qrcode previous fa-2x"></i>
        <h1 class="page-detail"><img style="width: 50px" src=" images/logo_white.png" alt="logo "><br></h1>
    </div>

    <div class="cotainer2">

        <h1 style=" font-size: 25px; font-weight: 800;">Hello Kasun,</h1>
        <h4 style="font-size: 25px; color: rgb(85, 85, 85); text-shadow: none; font-weight: 100; margin-top: -20px; margin-bottom: 5px;">
            What do you want to eat?</h4>

        <input type="text" class="ui-input-text ui-body-a" name="" id="searchinput1" placeholder=" Search Food Items..."
               value="" data-type="search"
        <div data-role="fieldcontain">


            <!-- 2nd scroll -->
            <div style="margin-top:0px;" class="scrollmenu itemList">
                <table class="change-table">
                    <tr>
                        <td>
                            <a href="buyer_category.php" rel="external">
                                <input type="image" src="images/pizza 2.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>

                        </td>
                        <td>

                            <a href="buyer_category.php" rel="external">
                                <input type="image" src="images/ramen 1.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>

                        </td>
                        <td>

                            <a href="buyer_category.php" rel="external">
                                <input type="image" src="images/cake-slice 1.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>

                        </td>
                        <td>

                            <a href="buyer_category.php" rel="external">
                                <input type="image" src="images/latte 1.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>

                        </td>
                        <td>

                            <a href="buyer_category.php" rel="external">
                                <input type="image" src="images/sandwich 2.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>

                        </td>
                        <td>

                            <a href="buyer_category.php" rel="external">
                                <input type="image" src="images/fast-food 1.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>

                        </td>
                    </tr>
                </table>
            </div>

            <div>
                <div class="carosol-today-deal">
                    <div class="title-deal">
                        <p style="color:hsl(240, 70%, 22%)">
                        <div style="font-size: 18px; font-weight: 900">Food Menu</div>
                        <span class=padd-title>
                        </span>
                        <div style="color: rgb(232, 76, 79); font-size: 14px;  float: right; margin-top: -25px; margin-right: 6px;"
                             class="al-sell-all-tab">See all
                        </div>
                        </p>
                    </div>

                    <!-- 2nd scrol -->
                    <div style="margin-top: -15px;" class="scrollmenu">
                        <table class="change-table">
                            <tr>
                                <td class="gap-product">
                                    <a href="buyer_item.php" rel="external">
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
                                    </a>
                                </td>
                                <td class="gap-product">
                                    <a href="buyer_item.php" rel="external">
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
                                    </a>
                                </td>
                                <td class="gap-product">
                                    <a href="buyer_item.php" rel="external">
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
                                    </a>
                                </td>
                                <td class="gap-product">
                                    <a href="buyer_item.php" rel="external">
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
                                    </a>
                                </td>
                                <td class="gap-product">
                                    <a href="buyer_item.php" rel="external">
                                        <div class='card card-view'>
                                            <img class='card-img-top card-image'
                                                 src="assets/images/favourite/White-Chocolate-Raspberry-Cheesecake.jpg">
                                            <div class='card-body'>
                                                <hr class="product-hr">
                                                <p class="product-name">White Chocolate</p>

                                                <h5 class="price-tag">LKR 2500.00</h5>
                                                <p class="discount"> 10% off</p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td class="gap-product">
                                    <a href="buyer_item.php" rel="external">
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
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
            </div>


            <div>
                <div class="carosol-today-deal">
                    <div class="title-deal">
                        <p style="color:hsl(240, 70%, 22%)">
                        <div style="font-size: 18px; margin-top: -25px; font-weight: 900">Play List</div>
                        <span class=padd-title>
                        </span>
                        <div style="color: rgb(232, 76, 79); font-size: 14px;  float: right; margin-top: -25px; margin-right: 6px;"
                             class="al-sell-all-tab">See all
                        </div>
                        </p>
                    </div>
                </div>
            </div>

            <!-- 2nd scrol -->
            <div style="margin-top: -15px;" class="scrollmenu playList">
                <table class="change-table">
                    <tr>
                        <td class="gap-product">

                            <p>&nbsp;&nbsp;&nbsp;What is Door2Door?</p>
                            <a href="#popup_video" data-rel="popup" data-position-to="window">
                                <input type="image" src="images/play.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>
                            <div data-role="popup" id="popup_video" data-theme="a" data-tolerance="15,15"
                                 class="ui-content">
                                <iframe src="images/bunny.mp4" width="400" height="200"></iframe>
                            </div>

                        </td>
                        <td class="gap-product">

                            <p>&nbsp;&nbsp;&nbsp;How to place a order</p>
                            <a href="#popup_video" data-rel="popup" data-position-to="window">
                                <input type="image" src="images/play.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>
                            <div data-role="popup" id="popup_video" data-theme="a" data-tolerance="15,15"
                                 class="ui-content">
                                <iframe src="images/bunny.mp4" width="400" height="200"></iframe>
                            </div>
                        </td>
                        <td class="gap-product">

                            <p>&nbsp;&nbsp;&nbsp;How to sell foods</p>
                            <a href="#popup_video" data-rel="popup" data-position-to="window">
                                <input type="image" src="images/play.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>
                            <div data-role="popup" id="popup_video" data-theme="a" data-tolerance="15,15"
                                 class="ui-content">
                                <iframe src="images/bunny.mp4" width="400" height="200"></iframe>
                            </div>
                        </td>
                        <td class="gap-product">

                            <p>&nbsp;&nbsp;&nbsp;How to sell foods</p>
                            <a href="#popup_video" data-rel="popup" data-position-to="window">
                                <input type="image" src="images/play.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>
                            <div data-role="popup" id="popup_video" data-theme="a" data-tolerance="15,15"
                                 class="ui-content">
                                <iframe src="images/bunny.mp4" width="400" height="200"></iframe>
                            </div>
                        </td>
                        <td class="gap-product">

                            <p>&nbsp;&nbsp;&nbsp;How to sell foods</p>
                            <a href="#popup_video" data-rel="popup" data-position-to="window">
                                <input type="image" src="images/play.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>
                            <div data-role="popup" id="popup_video" data-theme="a" data-tolerance="15,15"
                                 class="ui-content">
                                <iframe src="images/bunny.mp4" width="400" height="200"></iframe>
                            </div>
                        </td>
                        <td class="gap-product">

                            <p>&nbsp;&nbsp;&nbsp;How to sell foods</p>
                            <a href="#popup_video" data-rel="popup" data-position-to="window">
                                <input type="image" src="images/play.png" name="saveForm" class="btTxt submit"
                                       id="saveForm"/>
                            </a>
                            <div data-role="popup" id="popup_video" data-theme="a" data-tolerance="15,15"
                                 class="ui-content">
                                <iframe src="images/bunny.mp4" width="400" height="200"></iframe>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
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

        // VIDEO
        $(document).on("pagecreate", function () {

            function scale(width, height, padding, border) {
                var scrWidth = $(window).width() - 30,
                    scrHeight = $(window).height() - 30,
                    ifrPadding = 2 * padding,
                    ifrBorder = 2 * border,
                    ifrWidth = width + ifrPadding + ifrBorder,
                    ifrHeight = height + ifrPadding + ifrBorder,
                    h, w;

                if (ifrWidth < scrWidth && ifrHeight < scrHeight) {
                    w = ifrWidth;
                    h = ifrHeight;
                } else if ((ifrWidth / scrWidth) > (ifrHeight / scrHeight)) {
                    w = scrWidth;
                    h = (scrWidth / ifrWidth) * ifrHeight;
                } else {
                    h = scrHeight;
                    w = (scrHeight / ifrHeight) * ifrWidth;
                }
                return {
                    'width': w - (ifrPadding + ifrBorder),
                    'height': h - (ifrPadding + ifrBorder)
                };
            };

            $(".ui-popup iframe")
                .attr("width", 0)
                .attr("height", "auto");

            $("#popup_video").on({
                popupbeforeposition: function () {

                    // here calling custom function scale() to get the width and height
                    var size = scale(497, 298, 15, 1),
                        w = size.width,
                        h = size.height;
                    $("#popup_video iframe")
                        .attr("width", w)
                        .attr("height", h);
                },

                popupafterclose: function () {
                    $("#popup_video iframe")
                        .attr("width", 0)
                        .attr("height", 0);
                }
            });
        });
    </script>

<?php include 'footer.php'; ?>