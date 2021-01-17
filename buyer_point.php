<?php include 'header.php'; ?>

<div data-role="header" data-position="fixed" class="header-bar">
    <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
    <i class="fa fa-chevron-left previous"></i>
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">PROFILE</h1>
</div>

<div class="grid-container-profile">
    <div class="one-profile" style="margin-left:20px; margin-top:20px; text-align:center;">
        <i class="fa fa-user fa-5x"></i>
        <h3>LEVEL3</h3>
    </div>
    <div class="two-profile">
        <h2>Kasun Maduwantha</h2>
        <p>No: 90/1, Pagoda Road, Nugegoda, Colombo</p>
        <p>kasunmaduwantha23@gmail.com</p>
        <p>0776543523</p>
        <button class="logout" style="width:50%; color:#ffffff; margine-right:20px; font-size:10px;">LOGOUT</button>

    </div>
</div>


<div role="main" class="ui-content">
    <div data-role="tabs">
        <div data-role="navbar">
            <ul>
                <li><a href="#fragment-1" class="ui-btn-active">Points</a></li>
                <li><a href="#fragment-2">Recent Orders</a></li>
                <li><a href="#fragment-3">Favourite</a></li>
            </ul>
        </div>
        <br>
        <div id="fragment-1">
            <h3 class="point-section">Receive a <span class="" style="color:red;"> Rs 500.00 reward </span> for every
                100 points earned.!</h3>

            <div class="myProgress">
                <div class="myBar" style="width:70%;"></div>
            </div>
            <p class="persentage">
                65/100<br>
                POINTS
            </p>

            <p style="font-size: 12px; font-weight: 100" class="point-para">
                (Earn 1 point for every Rs.100.00 spent)<br><br><br>
            </p>
            <p class="point-para" style="font-size: 22px; font-weight: 900; color: #242424">
                Available balance Rs.350
            </p>
            <br>
            <br>
            <a href="buyyer_levelup.php" rel="external">
            <div class="ui-bar ui-bar-a profile-button" style="border-radius:10px; font-size:24px;">REDEEM</div>
            </a>
        </div>
        <div id="fragment-2" style="max-width:350px; margin-left:auto; margin-right:auto;">
            <div class="border-order">
                <h3 class="" style="margin-left:10px; font-size:18px;">ORDER ID- #2013456</h3>

                <div class="grid-container-order">
                    <div class="one" style="margin-left:10px; font-size:12px;">
                        <p>Finger Chicken X1<br>
                            Kibula Banis X2 <br>
                            Roos Paan X5</p>
                    </div>
                    <div class="two" style="margin-left:10px; font-size:12px;">
                        <p>LKR 275.00<br>
                            2021-01-18<br> 11.00p.m</p>
                        <h1 class="inprogress" style="font-size:18px;">INPROGRESS</h1>
                    </div>
                </div>
            </div>
            <div class="border-order" style="margin-top:10px;">
                <h3 class="" style="margin-left:10px; font-size:18px;">ORDER ID- #2013456</h3>

                <div class="grid-container-order">
                    <div class="one" style="margin-left:10px; font-size:12px;">
                        <p>Finger Chicken X1<br>
                            Kibula Banis X2 <br>
                            Roos Paan X5</p>
                    </div>
                    <div class="two" style="margin-left:10px; font-size:12px;">
                        <p>LKR 275.00<br>
                            2021-01-18<br> 11.00p.m</p>
                        <h1 class="inprogress" style="font-size:18px;">INPROGRESS</h1>
                    </div>
                </div>
            </div>
            <div class="border-order" style="margin-top:10px;">
                <h3 class="" style="margin-left:10px; font-size:18px;">ORDER ID- #2013456</h3>

                <div class="grid-container-order">
                    <div class="one" style="margin-left:10px; font-size:12px;">
                        <p>Finger Chicken X1<br>
                            Kibula Banis X2 <br>
                            Roos Paan X5</p>
                    </div>
                    <div class="two" style="margin-left:10px; font-size:12px;">
                        <p>LKR 275.00<br>
                            2021-01-18<br> 11.00p.m</p>
                        <h1 class="inprogress" style="font-size:18px;">INPROGRESS</h1>
                    </div>
                </div>
            </div>
        </div>


        <div id="fragment-3">
            <p>This is the content of the tab 'Three', with the id fragment-3.</p>
        </div>
    </div>
</div>
<br>

<?php include 'footer.php'; ?>

