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
    // save comment
    array_push($_SESSION['comments'], $newCommentData);
}

// read comments
$comments = $_SESSION['comments'];

// Removing the redundant HTML characters if any exist.
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
    </div>

    <div data-role="header" data-position="fixed" class="header-bar">
        <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
        <i class="fa fa-chevron-left previous" onclick="goBack()"></i>
        <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">ITEM DETAILS</h1>
    </div>

    <!-- Popup fullscreen view -->
    <div id="tshirt1" data-role="popup" class="photopopup" data-overlay-theme="a" data-corners="false"
         data-tolerance="30,15">
        <a id="closeBtnSlideshow" href="#" data-rel="back"
           class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
        <!--<a class="prev slideshowBtn" onclick="plusSlides(-1)">&#10094;</a>-->
        <img id="slideShowImage" src="assets/imagesges/favourite/Rice-Curry.png">
        <!--<a class="next slideshowBtn" onclick="plusSlides(1)">&#10095;</a>-->
    </div>
    <div class="rwd-example prod-img-container">
        <div class="ui-block-a">

            <img src="assets/images/favourite/<?php echo $loadItem['image'] ?>" style="width:100%">

        </div>
        <!--UI block A ends-->

        <div class="ui-block-b">
            <div class="ui-body ui-body-d">

                <div style="margin-bottom: 10px">
                    <span id="priceUnit">Rs</span><span id="priceDisplay"><?php echo $loadItem['price'] ?></span>
                    <span id="favContainer">
                    <span id="favouriteIcon"><i class="fa fa-share-square"></i>&nbsp&nbsp&nbsp<i
                                class="fa fa-heart"></i></span>
                        <!--todo fas-> for full heart-->
                    </span>
                    <br>
                    <span id="offerDisplay">-10% Special Offer</span>
                </div>

                <div style='text-align:center;'>
                    <div style='float:left;width:50%'>
                        <button id="btnCart" class="btnCartAndBuy ui-btn ui-btn-inline">Add to Cart</button>
                    </div>
                    <div style='float:right;width:50%'>
                        <button id="btnBuy" class="btnCartAndBuy ui-btn ui-btn-inline">Buy Now</button>
                    </div>
                </div>
                <br><br>
                <div style="margin-top: 15px">
                    <!--Product Name and Description-->
                    <p id="productName"><?php echo $loadItem['title'] ?></p>

                    <p id="descriptionDisplay"><?php echo $loadItem['description'] ?> </p>
                </div>

                <div style='text-align:center; margin-bottom: 10px; margin-top: 5px;'>
                    <!--Rating-->
                    <span id="ratingDisplay">4.0</span>
                    <span id="ratingDisplayTotal">/5</span>
                    <!--Stars for rating-->
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <!--No of Orders-->
                    <span id="noOfOrdersDisplay">123</span>
                    <span id="labelOrders">Orders</span>
                </div>

                <div id="reviewAndQAContainer" style='text-align:center;'>
                    <div style='float:left;width:36%'>
                        <i class="fa fa-users"></i>
                        <span class="viewReviews" id="viewReviews">Feedback</span>
                    </div>
                    <div style='float:left;width:31%'>
                        <i class="fa fa-question-circle"></i>
                        <span class="viewQandA" id="viewQandA">Contact Us</span>
                    </div>
                    <div style='float:right;width:31%'>
                        <!--Display store name-->
                        <span id="labelStore"><i class="fa fa-store-alt"></i></span>
                        <span class="storeName" id="storeName">Store</span>
                    </div>
                </div>


            </div>
            <br>
            <!--todo Add color size and quantity-->
        </div>
        <!--UI Block B ends-->
    </div>

    <div>

        <div data-role="content" data-theme="a">

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
        <div class="ui-grid-a">
            <form data-ajax="false" method="post" action="buyer_item.php?itemId=<?php echo $_GET['itemId'] ?>">
                <div class="ui-block-a">
                    <input type="hidden" id="name" name="name" value="John Deo"/>
                    <input type="hidden" id="datePicker" name="datePicker" value="<?php echo date('Y-m-d'); ?>"/>
                    <input type="text" id="comment" name="comment" placeholder="Type Your Message"/>
                </div>
                <button data-role="none" type="submit" value="Submit" class="send"><i
                            class="fa fa-paper-plane fa-lg"></i></button>
            </form>
        </div>

        <?php include 'bottom_navigation.php'; ?>
        <script>
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
        </script>
    </div>

<?php include 'footer.php'; ?>