

<?php include 'header.php'; ?>

    <div data-role="header" data-position="fixed" class="header-bar">
        <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
        <i class="fa fa-chevron-left previous" onclick="goBack()"></i>
        <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">QR SCANNER</h1>
    </div>



    <div style="width: 375px" id="reader">
    </div>
    <br>
    <br>


    <div>
        <div class="carosol-today-deal">
            <div class="title-deal">
                <p style="color:hsl(240, 70%, 22%)">
                <div style="font-size: 18px; font-weight: 900">Food Menu</div>
                <span class=padd-title>
                </span>
                <div style="color: rgb(232, 76, 79); font-size: 14px;  float: right; margin-top: -25px; margin-right: 6px;" class="al-sell-all-tab">See all
                </div>
                </p>
            </div>

            <!-- 2nd scrol -->
            <div style="margin-top: -15px;" class="scrollmenu">
                <table class="change-table">
                    <tr>
                        <td class="gap-product">
                            <div class='card card-view'>
                                <img class='card-img-top card-image' src="assets/images/favourite/Rice-Curry.png">
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
                                <img class='card-img-top card-image' src="assets/images/favourite/String-Hoppers.jpg">
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
                                <img class='card-img-top card-image' src="assets/images/favourite/Garlic-Prawns.png">
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
                                <img class='card-img-top card-image' src="assets/images/favourite/Strawberry-Cheesecake.jpg">
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
                                <img class='card-img-top card-image' src="assets/images/favourite/White-Chocolate-Raspberry-Cheesecake.jpg">
                                <div class='card-body'>
                                    <hr class="product-hr">
                                    <p class="product-name">White Chocolate</p>

                                    <h5 class="price-tag">LKR 2500.00</h5>
                                    <p class="discount"> 10% off</p>
                                </div>
                            </div>
                        </td>
                        <td class="gap-product">
                            <div class='card card-view'>
                                <img class='card-img-top card-image' src="assets/images/favourite/Fish-curry.jpg">
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





    <script>
        function onScanSuccess(qrCodeMessage) {
            console.log(qrCodeMessage);
            var win = window.open(qrCodeMessage, '_blank');
            win.focus();
            // handle on success condition with the decoded message
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: 250
            });
        html5QrcodeScanner.render(onScanSuccess);

    </script>



    <?php include 'footer.php'; ?>
