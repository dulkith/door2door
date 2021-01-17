<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DOOR 2 DOOR</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="themes/door2door.css"/>
    <link rel="stylesheet" href="themes/door2door.min.css"/>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="style/store.css"/>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/styles.css">

    <script>
        function navOpen() {
            document.getElementById("sideNavigation").style.width = "250px";
        }

        function navClose() {
            document.getElementById("sideNavigation").style.width = "0";
        }
    </script>

</head>

<body>

<div id="sideNavigation" class="sideNavigation" onclick="navClose()">
    <div class="logo">
        <img class="logo_white_login" src=" images/logo_white.png" alt="logo "><br>
    </div>
    <?php include 'header.php'; ?>
</div>

<div data-role="header" data-position="fixed" class="header-bar">
    <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
    <i class="fa fa-chevron-left previous"></i>
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">CATEGORIES</h1>
</div>

<div class="cotainer2">

    <input type="text" class="ui-input-text ui-body-a" name="" id="searchinput1" placeholder=" Search Food Items..."
           value="" data-type="search"
    <div data-role="fieldcontain">

        <div>
            <div class="carosol-today-deal">
                <div class="title-deal">
                    <p style="color:hsl(240, 70%, 22%)">
                    <div style="font-size: 12px; margin-top: -5px; margin-bottom: -15px;font-weight: 600">12 categories
                        listed
                    </div>
                    <span class=padd-title>
                        </span>
                    <div style="color: rgb(232, 76, 79); font-size: 14px; float: right; margin-top: -6px; margin-right: 6px;"
                         class="al-sell-all-tab"><i class="fa fa-sort"></i> Sort
                    </div>
                    </p>
                </div>
            </div>
        </div>

        <div class="gallery">
            <a href="buyyer_menu.html" rel="external">
                <img src=" images/cake-slice 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Desserts</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/fast-food 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Fast Food</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/ramen 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Chinese</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/pizza 2.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/sandwich 2.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/crab 2.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/latte 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/samosa 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>
        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/cake-slice 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Desserts</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/fast-food 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Fast Food</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/ramen 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Chinese</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/pizza 2.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/sandwich 2.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/crab 2.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/latte 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/samosa 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>
        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/latte 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>

        <div class="gallery ">
            <a href="buyyer_menu.html" rel="external">
                <img src="images/samosa 1.png " alt="Cinque Terre " width="600 " height="400 ">
            </a>
            <div class="desc ">Pizza</div>
        </div>

    </div>
    <?php include 'footer.php'; ?>
</body>

</html>