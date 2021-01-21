<?php include 'header.php'; ?>

<?php
//check if the get variable exists
if (isset($_GET['itemId'])) {
    $strJsonFileContents = file_get_contents("data.json");
    $itemsArray = json_decode($strJsonFileContents, true);

    $loadItem = null;
    foreach ($itemsArray as $item) {
        if ($item['id'] == $_GET['itemId'])
            $loadItem = $item;
    }

} else {
    /* Redirect browser */
    header("Location: http://localhost/door2door/buyer_menu.php");
    exit();
}

// Defining variables
$name = $datePicker = $comment = "";

// Checking for a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $datePicker = test_input($_POST["datePicker"]);
    $comment = test_input($_POST["comment"]);
    $newCommentData = array(
        "name" => $name,
        "datePicker" => $datePicker,
        "comment" => $comment
    );
    array_push($_SESSION['comments'], $newCommentData);
}

$comments = $_SESSION['comments'];

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

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
        <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">ITEM DETAILS</h1>
    </div>

    <div class="contenr3">
        <div id="tshirt1" data-role="popup" class="photopopup" data-overlay-theme="a" data-corners="false"
             data-tolerance="30,15">
            <a id="closeBtnSlideshow" href="#" data-rel="back"
               class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
            <img id="slideShowImage" src="assets/imagesges/favourite/Rice-Curry.png">
        </div>
        <div class="rwd-example prod-img-container">
            <div class="ui-block-a">

                <img src="assets/images/favourite/<?php echo $loadItem['image'] ?>" style="width:100%">

            </div>

            <div class="ui-block-b">
                <div class="ui-body ui-body-d">

                    <div style="margin-bottom: 10px">
                        <span id="priceDisplay"><?php echo $loadItem['title'] ?></span>
                    </span>
                        <br>
                        <span id="offerDisplay">-10% Special Offer</span>
                    </div>

                    <div style='text-align:center;'>
                        <div style='float:left;width:50%'>
                            <a href="buyer_cart.php?itemId=<?php echo $loadItem['id'] ?>" rel="external">
                                <button id="btnCart" class="btnCartAndBuy ui-btn ui-btn-inline"><i class="fa fa-cart-plus"></i> ADD TO CART</button>
                            </a>
                        </div>

                        <a href="?addFavouriteFood=<?php echo $loadItem['id'] ?>" rel="external">
                            <div style='float:right;width:50%'>
                                <button id="btnBuy" class="btnCartAndBuy ui-btn ui-btn-inline"><i class="fa fa-heart"></i> FAVOURITE</button>
                            </div>
                        </a>
                    </div>
                    <br><br>
                    <div style="margin-top: 15px">
                        <p id="productName"><span id="priceUnit">Rs <?php echo $loadItem['price'] ?></span></p>

                        <p id="descriptionDisplay"><?php echo $loadItem['description'] ?> </p>
                    </div>

                    <div style='text-align:center; margin-bottom: 10px; margin-top: 5px;' class="stars" data-rating="4">
                        <span id="noOfOrdersDisplay">123</span>
                        <span id="labelOrders">Orders</span>
                        <!--Stars for rating-->
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                    </div>
                </div>
                <br>
            </div>
        </div>

        <div>

            <div data-role="content" data-theme="a" class="fonts">

                <?php $x = 1;
                foreach ($comments as $data) {
                    if ($x == 1) { ?>
                        <div class="container light">
                            <p class="name"><i class="fa fa-user fa-2x"> </i><?php echo $data['name'] ?>
                                <br><?php echo $data['datePicker'] ?></p>
                            <div class="con">
                                <p class="comment"><?php echo $data['comment'] ?></p>
                            </div>
                        </div>
                        <?php
                        $x = 0;
                    } else if ($x == 0) { ?>
                        <div class="container darker">
                            <p class="name1"><i class="fa fa-user fa-2x"> </i><?php echo $data['name'] ?>
                                <br><?php echo $data['datePicker'] ?></p>
                            <div class="con">
                                <p class="comment"><?php echo $data['comment'] ?></p>
                            </div>
                        </div>
                        <?php $x = 1;
                    } ?>
                <?php } ?>

            </div>
            <div class="ui-grid-a" style="margin-top:50px;">
                <form data-ajax="false" method="post" action="buyer_item.php?itemId=<?php echo $_GET['itemId'] ?>">
                    <div class="ui-block-a">
                        <input type="hidden" id="name" name="name" value="John Deo"/>
                        <input type="hidden" id="datePicker" name="datePicker" value="<?php echo date('Y-m-d'); ?>"/>
                        <input type="text" id="comment" name="comment" placeholder="Type Your Message"/
                        style="padding-right:130px; height:30px;">
                    </div>
                    <button data-role="none" type="submit" value="Submit" class="send"><i
                                class="fa fa-paper-plane fa-lg"></i></button>
                </form>
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

            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }

            $(document).on("pagecreate", function () {
                $(".photopopup").on({
                    popupbeforeposition: function () {
                        var maxHeight = $(window).height() - 60 + "px";
                        $(".photopopup img").css("max-height", maxHeight);
                    }
                });
            });

            function goToHome() {
                document.location.href = "./buyer_home.html";
            }

            //The following has to be done from other pages which contain list of products
            $(document).ready(function () {
                window.sessionStorage.setItem('product_id', "1"); //This has to be done in the previous page
                let product_id = window.sessionStorage.getItem('product_id');
                console.log("Current product id is " + product_id);
                if (product_id != null) {
                    let msgText = 'Custom Loader';
                    let textVisible = 'true';
                    let theme = 'a';
                    let textonly = 'true';
                    let html = "<span class=\"ui-bar ui-shadow ui-overlay-d ui-corner-all\"><img alt='Loading' src=\"../lib/images/Loading.png\"><h1 class='loaderText'>Loading ...</h1></span>";

                    $.mobile.loading("show", {
                        text: msgText,
                        textVisible: textVisible,
                        theme: theme,
                        textonly: textonly,
                        html: html
                    });
                    var millisecondsToWait = 2000;
                    setTimeout(function () {
                        // Whatever you want to do after the wait
                        $.ajax({
                            url: "http://localhost:9002/Door2Door/product/" + product_id
                        }).then(function (data) {
                            console.log(data);
                            if (data.status === "success") {
                                let prod_data = data.result[0];
                                document.getElementById("priceDisplay").innerHTML = prod_data.price;
                                document.getElementById("offerDisplay").innerHTML = prod_data.promotion;
                                document.getElementById("productName").innerHTML = prod_data.product_name;
                                document.getElementById("descriptionDisplay").innerHTML = prod_data.description;
                            }
                        });
                        $.mobile.loading('hide');
                    }, millisecondsToWait);

                }
                $("#viewReviews").click(function () {
                    //window.sessionStorage.setItem('product_id', "1");
                    window.location = '#';
                });
                $("#viewQandA").click(function () {
                    window.location = '#';
                });
                $("#storeName").click(function () {
                    window.location = '#';
                });
                $("#btnCart").click(function () {
                    window.location = 'cart.html';
                });
                $("#btnBuy").click(function () {
                    window.location = 'buy.html';
                });

            });

            //star rating

            document.addEventListener('DOMContentLoaded', function () {
                let stars = document.querySelectorAll('.star');
                stars.forEach(function (star) {
                    star.addEventListener('click', setRating);
                });

                let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
                let target = stars[rating - 1];
                target.dispatchEvent(new MouseEvent('click'));
            });

            function setRating(ev) {
                let span = ev.currentTarget;
                let stars = document.querySelectorAll('.star');
                let match = false;
                let num = 0;
                stars.forEach(function (star, index) {
                    if (match) {
                        star.classList.remove('rated');
                    } else {
                        star.classList.add('rated');
                    }
                    if (star === span) {
                        match = true;
                        num = index + 1;
                    }
                });
                document.querySelector('.stars').setAttribute('data-rating', num);
            }

        </script>
    </div>

<?php include 'footer.php'; ?>