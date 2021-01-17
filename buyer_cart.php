<?php include 'header.php'; ?>

<div data-role="header" data-position="fixed" class="header-bar">
    <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
    <i class="fa fa-chevron-left previous"></i>
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">CART</h1>
</div>

<div class="grid-container-cart">
    <div class="total">Total</div>
    <div class="totalValue">LKR.1500.00</div>
    <div class="subTotal">Subtotal</div>
    <div class="subTotalValue">LKR.1400.00</div>
    <div class="line">
        <hr>
    </div>
    <div class="tax">Tax & Fees</div>
    <div class="taxValue">LKR.100.00</div>
    <div class="delivery">Delivery</div>
    <div class="deliveryValue">Free</div>

</div>

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


        </div>
    <?php } ?>

</div>

<?php include 'footer.php'; ?>
