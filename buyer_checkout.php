<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CHECKOUT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="style/buy.css">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.0/aframe/build/aframe-ar.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<div id="sideNavigation" class="sideNavigation" onclick="navClose()">
    <div class="logo">
        <img class="logo_white_login" src=" images/logo_white.png" alt="logo "><br>
    </div>
    <?php include 'menu.php'; ?>
</div>

<div data-role="header" data-position="fixed" class="header-bar">
    <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
    <i class="fa fa-chevron-left previous" onclick="goBack()"></i>
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">CHECKOUT</h1>
</div>


<div data-role="content" data-theme="a">

    <div id="allContent" class="rwd-example prod-img-container">

        <div class="ui-block-a">
            <div id="customerDetails" class="ui-body ui-body-d">
                <div id="leftThing">
                    <i class="glyphicon glyphicon-map-marker"></i>
                </div>
                <div id="content">
                    <ul data-role="listview">
                        <li>
                            <h6 id="custName">Sarath Jayasekare</h6>
                            <p id="custAddressRoad">42/5, Pagiriwatta road,</p>
                            <p id="custAddressCity">Delkada </p>
                            <p id="custAddressProvince">Western, LK </p>
                            <p id="custZipCode">10250. </p>
                            <p id="custMobileNumber">0766708279 </p>
                        </li>
                    </ul>
                </div>
                <div id="rightThing">
                    <a id="editAddress" href="#popupBasic" data-rel="popup" data-transition="pop">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                </div>
            </div>
            <hr class="border">

        </div>

        <div id="productDetailss" class="ui-block-b" style="margin-top: 2%">
            <div class="ui-body ui-body-d">
                <div id="prodNameH">
                    <div id="leftprodH">
                        <i class="glyphicon glyphicon-gift"></i>
                    </div>
                    <div id="prodHC">
                        <p id="productCategory" style="font-size: medium;font-weight: bold;">Rice and Curry</p>
                    </div>
                </div>
                <hr class="border">
                <div class="ui-grid-a" id="prodbody">
                    <div class="ui-body ui-body-d" id="prodBodyPic">
                        <img id="prodImg" style="width: 100%" src="assets/images/favourite/crab-curry.jpg"/>
                    </div>
                    <div id="prodBodyCont">
                        <div class="ui-body ui-body-d">
                            <h6 id="prodName">Chill's Food</h6>
                            <h5 id="prodPrice" style="font-weight: bold">LKR 250.00</h5>
                            <h6 id="prodDelivery" style="color: #f72855">Delivery charge: LKR 10.00</h6>
                        </div>
                    </div>
                </div>
                <hr class="border">
                <div class="ui-grid-a">
                    <input type="text" name="textNote" id="txtNote" placeholder="Note to seller (optional)" value=""
                           data-corners="false" data-clear-btn="true">
                </div>
                <hr class="border">
                <div id="prodTotal">
                    <div id="prodTotalleft" class="ui-body ui-body-d">
                        <h6 style="color: #5f6264">Sub Total :</h6>
                        <h6 style="color: #5f6264">Delivery Charge :</h6>
                        <h6 style="color: #010201">Total :</h6>

                    </div>
                    <div id="prodTotalright" class="ui-body ui-body-d">
                        <h6 id="calProdPrice" style="color: #5f6264;text-align: right">LKR 250.00</h6>
                        <h6 id="calProdDel" style="color: #5f6264;text-align: right">LKR 10.00</h6>
                        <h6 id="calProdTotal" style="color: #010201;text-align: right">LKR 260.00</h6>

                    </div>
                </div>
            </div>
        </div>

        <div id="orderSummary" class="ui-block-c" style="margin-top: 2%" data-role="content" data-theme="a">
            <p style="font-size: medium;font-weight: bold;margin-left: 5%">Order Summary (1 item)</p>
            <hr class="border">
            <div id="sumTotal">
                <div id="sumTotalleft">
                    <h6 style="color: #5f6264;margin-left: 5%">Sub Total :</h6>
                    <h6 style="color: #5f6264;margin-left: 5%">Promo Code :</h6>
                    <h6 style="color: #5f6264;margin-left: 5%">Special Offer :</h6>
                    <h5 style="color: #010201;font-weight: bold;margin-left: 5%">Total :</h5>

                </div>
                <div id="sumtotalright" class="ui-body ui-body-d">
                    <h6 id="prodSumTotal" style="color: #5f6264;text-align: right">LKR 260.00</h6>
                    <a id="prodPromoCode" href="#promopop" onclick="" data-rel="popup" data-transition="pop">
                        <h6 style="color: #f72855;text-align: right">Enter code here</h6>
                    </a>
                    <a id="ProdSpecialOff" href="#offeropop" onclick="" data-rel="popup" data-transition="pop">
                        <h6 style="color: #f72855;text-align: right">Enter code here</h6>
                    </a>

                    </a>
                    <h5 id="prodSumAmount" style="color: #010201;font-weight: bold;text-align: right">LKR 260.00
                    </h5>
                </div>
            </div>
        </div>
    </div>

</div>
<div data-role="footer" data-position="fixed" role="banner">
    <div>
        <div style='float:left;width:70%' class="ui-body ui-body-d">

            <h6 style="color: #010201;font-weight: bold; font-size: 30px">Total</h6>
            <h4 id="PayAmount" style="color: #2f0b0b;font-weight: bold">260.00</h4>

        </div>
        <div style='float:right;width:30%; height: 100px; text-align: center'>
            <button style="justify-content: center;" id="btPayNow" class="ui-btn ui-btn-inline"><span style="font-size: 16px">Pay Now</span></button>
        </div>
    </div>

</div>

<div style="margin-top: 20%;align-content: center;" class="ui-block-d" data-role="popup" id="popupBasic"
     data-overlay-theme="a" data-theme="a" data-dismissible="false" data-position-to="window"
     style="max-width:400px;" align="center">
    <div data-role="header" data-theme="b">
        <h1>Edit Address</h1>
    </div>
    <p>This address will be used for shipping this product.</p>
    <label for="popupBasic">Street:</label>
    <input type="text" name="name" id="streetInput" value="">
    <label for="popupBasic">City :</label>
    <input type="text" name="name" id="cityInput" value="">
    <label for="popupBasic">Province:</label>
    <input type="text" name="name" id="provinceInput" value="">
    <label for="popupBasic">Zip Code:</label>
    <input type="text" name="name" id="zipCodeInput" value="">

    <a href="" data-role="button" data-inline="true" data-rel="back">Cancel</a>
    <a id="saveAddress" onclick="SaveAddress()" data-role="button" data-theme="b" data-inline="true">Save</a>

</div>

<div id="popuppayment" data-role="popup" data-dialog="true" data-transition="pop"
     style="width: 300px; border: none;">

    <div data-role="header" data-theme="b" style="border: none; background-color: rgb(232, 76, 79) !important;">
        <h1 style="font-size: 12px; text-shadow: none; font-weight: 600; letter-spacing: 1px;">
            Successful</h1>
    </div>

    <div role="main" class="ui-content">
        <p style="text-align: center; font-size: 13px; letter-spacing: 1px;">Your payment is successful.<br>You have won
            10 points for the transection. </br>Thank you !</p>
        <a href="" class="ui-btn ui-shadow ui-btn-b" onclick="paymentSuccs()"
           style="background-color: rgb(232, 76, 79) !important; font-size: 13px;border: none; text-shadow: none; font-weight: 100;">OK</a>
    </div>
</div>

<div id="promopop" data-role="popup" data-dialog="true" data-transition="pop" data-position-to="window">

    <div data-role="header" data-theme="b">
    </div>

    <label for="popupBasic">Promo code:</label>
    <input type="text" name="name" id="promoInput" value="">

    <a href="" data-role="button" data-inline="true" data-rel="back">Cancel</a>
    <a href="" onclick="promoCode()" data-role="button" data-theme="b" data-inline="true">OK</a>

</div>

<div id="offeropop" data-role="popup" data-dialog="true" data-transition="pop" data-position-to="window">

    <div data-role="header" data-theme="b">
        <h1>Add Offer</h1>
    </div>
    <label for="popupBasic">offer code:</label>
    <input type="text" name="name" id="offerInput" value="">
    <div role="main" class="ui-content">
        <!-- <h1>Delete page?</h1> -->
        <a href="" data-role="button" data-inline="true" data-rel="back">Cancel</a>
        <a href="" onclick="offerCode()" data-role="button" data-theme="b" data-inline="true">OK</a>

    </div>
</div>

<div align="center" id="thankyouPayment">
    <script type="text/javascript">
        function SaveAddress() {

            let street = document.getElementById("streetInput").value;
            let city = document.getElementById("cityInput").value;
            let province = document.getElementById("provinceInput").value;
            let zip = document.getElementById("zipCodeInput").value;


            document.getElementById('custAddressRoad').innerHTML = street;
            document.getElementById('custAddressCity').innerHTML = city;
            document.getElementById('custAddressProvince').innerHTML = province;
            document.getElementById('custZipCode').innerHTML = zip;

            console.log(street);
            $("#popupBasic").popup('close');

        }

        function GotoAR() {
            location.href = "PaymentPopup.html";
        }

        function goToProduct() {
            document.location.href = "./product.html";
        }

        $(document).ready(function () {
            let product_id = window.sessionStorage.getItem('product_id');
            console.log("Current product id is " + product_id);
            if (product_id != null) {
                let msgText = 'Custom Loader';
                let textVisible = 'true';
                let theme = 'a';
                let textonly = 'true';
                let html = "<span class=\"ui-bar ui-shadow ui-overlay-d ui-corner-all\"><img alt='Loading' src=\"../lib/images/loader-logo-blue.png\"><h1 class='loaderText'>Loading ...</h1></span>";

                $.mobile.loading("show", {
                    text: msgText,
                    textVisible: textVisible,
                    theme: theme,
                    textonly: textonly,
                    html: html
                });
                var millisecondsToWait = 2000;
                setTimeout(function () {
                    $.ajax({
                        url: "http://localhost:9002/Door 2 Door/product/" + product_id
                    }).then(function (data) {
                        console.log(data);
                        if (data.status === "success") {
                            let prod_data = data.result[0];
                            let totalAmount = prod_data.price + 100;

                            console.log(prod_data.product_name);
                            document.getElementById("prodPrice").innerHTML = "LKR " + prod_data.price + ".00";
                            document.getElementById("productCategory").innerHTML = prod_data.product_name;
                            document.getElementById("prodName").innerHTML = prod_data.description;
                            document.getElementById("calProdPrice").innerHTML = "LKR " + prod_data.price + ".00";
                            document.getElementById("calProdTotal").innerHTML = "LKR " + totalAmount + ".00";

                            document.getElementById("prodSumTotal").innerHTML = "LKR " + totalAmount + ".00";
                            document.getElementById("prodSumAmount").innerHTML = "LKR " + totalAmount + ".00";
                            document.getElementById("PayAmount").innerHTML = totalAmount + ".00";
                        }
                    });
                    $.mobile.loading('hide');
                }, millisecondsToWait);

            }
        });

        jQuery(function ($) {
            var $form = $('#frmBooking');
            var handler = StripeCheckout.configure({
                key: 'pk_test_cp21BcECf4kMMUbSlRlZlsMo',
                token: function (token) {
                    if (token.id) {

                        $("#popuppayment").popup("open");

                        let payAmount = document.getElementById('PayAmount').textContent;
                        let jsonData = {
                            "Item": {
                                "user_id": 2,
                                "product_id": 1,
                                "total_amount": payAmount,
                                "order_time": "2019-10-11 10:45:14",
                                "order_status": "paid",
                                "quantity": 1,
                                "store_id": 2
                            }
                        };
                        $(document).ready(function () {
                            $("button").click(function () {

                                let xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (this.readyState == 4 && this.status == 200) {
                                        alert(this.responseText);
                                    }
                                };
                                xhttp.open("POST", "http://localhost:9002/KLANmart/buy", true);
                                xhttp.setRequestHeader("Content-type", "application/json");
                                xhttp.send(JSON.stringify(jsonData));
                            });
                        });
                    }
                }
            })

            $('#btPayNow').on('click', function (e) {
                let payAmount = document.getElementById('PayAmount').textContent;
                console.log("amount" + payAmount);
                handler.open({
                    name: 'Enter Payment',
                    currency: 'LKR',
                    description: payAmount,
                    amount: payAmount * 100
                }, '_self');
            });
        });

        popupbeforeposition: function hide() {
            $('.ui-popup-screen').off();
        }

        function promoCode() {
            let promo = document.getElementById("promoInput").value;
            let payAmount = document.getElementById('PayAmount').textContent;

            if (promo != null && promo != "") {
                payAmount = payAmount - 100;
                document.getElementById('prodPromoCode').innerHTML = "100 Off";
                document.getElementById("prodSumAmount").innerHTML = "LKR " + payAmount + ".00";
                document.getElementById("PayAmount").innerHTML = payAmount;
                $("#promopop").popup('close');
                console.log(promo);
                $('#prodPromoCode').href = "javascript:void(0)";
                $('#prodPromoCode').color = "gray";
            } else {
                $("#promopop").popup('close');
            }

        }

        function offerCode() {
            let offer = document.getElementById("offerInput").value;
            let payAmount = document.getElementById('PayAmount').textContent;

            if (offer != null && offer != "") {
                payAmount = payAmount * 90 / 100;
                document.getElementById('ProdSpecialOff').innerHTML = "10% Off";
                document.getElementById("prodSumAmount").innerHTML = "LKR " + payAmount;
                document.getElementById("PayAmount").innerHTML = payAmount;
                $("#offeropop").popup('close');
                console.log(offer);
                $('#ProdSpecialOff').href = "javascript:void(0)";
                $('#ProdSpecialOff').color = "gray";
            } else {
                $("#offeropop").popup('close');
            }

        }

        function paymentSuccs() {
            window.location.href = "buyer_order_success.php";

        }

        $("#editAddress").on({
            popupbeforeposition: function () {
                $('.ui-popup-screen').off();
            }
        });

        window.onload = function () {
            var loggedUser = sessionStorage.getItem("logged_user");

            var myJson = JSON.parse(loggedUser);
            console.log(myJson);

            if (loggedUser != null) {

                document.getElementById('custName').innerHTML = myJson.f_name + "  " + myJson.l_name;
                document.getElementById('custAddressRoad').innerHTML = myJson.address;
                document.getElementById('custMobileNumber').innerHTML = myJson.mobile_no;
                $('#streetInput').val(myJson.address);

                let city = document.getElementById('custAddressCity').value;
                let province = document.getElementById('custAddressProvince').value;
                let zip = document.getElementById('custZipCode').value;

                $('#cityInput').val(city);
                $('#provinceInput').val(province);
                $('#zipCodeInput').val(zip);
            }
        }

        function navOpen() {
            document.getElementById("sideNavigation").style.width = "250px";
        }

        function navClose() {
            document.getElementById("sideNavigation").style.width = "0";
        }

    </script>
</div>

</body>

</html>
