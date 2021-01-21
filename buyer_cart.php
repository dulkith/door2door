<?php include 'header.php';

//check if the get variable exists
if (isset($_GET['itemId'])) {
    $strJsonFileContents = file_get_contents("data.json");
    $itemsArray = json_decode($strJsonFileContents, true);

    foreach ($itemsArray as $item) {
        if ($item['id'] == $_GET['itemId']) {
            array_push($_SESSION['cart'], $item);
        }
    }

}

$cart = $_SESSION['cart'];
// remove
if (isset($_GET['itemIdRemove'])) {
    foreach ($cart as $key => $item) {
        if ($item['id'] == $_GET['itemIdRemove']) {
            unset($cart[$key]);
             $_SESSION['cart'] = $cart;
            break;
        }
    }

}
$cart = $_SESSION['cart'];

if (empty($cart)) {
    /* Redirect browser */
    header("Location: http://localhost/door2door/buyer_menu.php");
    exit();
}

$total = 0;
// calculate
foreach ($cart as $value) {
    $total = $total + floatval($value['price']);
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
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">CART</h1>
</div>

<div class="cotainer2">
    <div class="grid-container-cart">
        <div class="total">Total</div>
        <div class="totalValue">LKR.<?php echo  $total + 100 + 50 ?>.00</div>
        <div class="subTotal">Subtotal</div>
        <div class="subTotalValue">LKR.<?php echo $total ?>.00</div>
        <div class="line">
            <hr>
        </div>
        <div class="tax">Tax & Fees</div>
        <div class="taxValue">LKR.100.00</div>
        <div class="delivery">Delivery</div>
        <div class="deliveryValue">LKR 50.00</div>

    </div>

    <div>
        <div class="carosol-today-deal">
            <div class="title-deal">
                <p style="color:hsl(240, 70%, 22%)">
                <div style="font-size: 12px; margin-top: -5px; margin-bottom: -10px;font-weight: 600"><?php echo count($cart) ?>
                    items
                    listed
                </div>
            </div>
        </div>
    </div>

    <div id="foodsList" style="margin-top: 20px">
        <?php foreach ($cart as $value) { ?>
            <div class="grid-container">

                <a href="buyer_cart.php?itemIdRemove=<?php echo $value['id'] ?>" rel="external">
                    <i class="fa fa-times-circle fa-lg close-icon" style="color:#E84C4F;"></i>
                </a>

                <div class="foodImage">
                    <a href="" data-rel="popup" data-position-to="window">
                        <img src="assets/images/favourite/<?php echo $value['image'] ?>" style="width:80%">
                    </a>
                </div>
                <div class="foodTitle">
                    <h5><?php echo $value['title'] ?></h5>
                    <p class="item-details" style="font-size: 9px; margin-top: -20px">White Rice, Potato, Soya,
                        Papadam</p>
                </div>
                <div class="foodPrice"><span
                            style="font-size: 12px; font-weight: 900;">Rs <?php echo $value['price'] ?></span></div>


            </div>
        <?php } ?>

        <script>
            function navOpen() {
                document.getElementById("sideNavigation").style.width = "250px";
            }

            function navClose() {
                document.getElementById("sideNavigation").style.width = "0";
            }

        </script>
        <a href="buyer_checkout.php" rel="external">
            <div class="ui-bar ui-bar-a profile-button" style="border-radius:10px; font-size:24px; margin-top:20px;margin-bottom:20px;">
                CHECKOUT
            </div>
        </a>


    </div>
</div>

<?php include 'bottom_navigation.php'; ?>

<?php include 'footer.php'; ?>
