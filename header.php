<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DOOR 2 DOOR</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="themes/door2door.css"/>
    <link rel="stylesheet" href="themes/door2door.min.css"/>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css"/>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/store.css"/>
<!--    <link rel="stylesheet" href="style/buy.css">-->
<!---->
    <link rel="stylesheet" href="style/product.css"/>
    <script src="js/map-location.js"></script>
    <script src="js/app.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9r6ijUGikO_fB-IkreTpfCSbRod9WOWU&callback=initMap">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/html5-qrcode.min.js"></script>
</head>
<?php
// Start the session
session_start();

if (!isset($_SESSION['favourite']) || $_SESSION['favourite'] == ''){
    $_SESSION['favourite']=array();
}
if (!isset($_SESSION['comments']) || $_SESSION['comments'] == ''){
    $_SESSION['comments']=array();
}
if (!isset($_SESSION['cart']) || $_SESSION['cart'] == ''){
    $_SESSION['cart']=array();
}
if (!isset($_SESSION['points']) || $_SESSION['points'] == ''){
    $_SESSION['points']=0;
}
?>

<body>
