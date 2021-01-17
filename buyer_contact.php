<?php include 'header.php'; ?>

    <body>
<div data-role="header" data-position="fixed" class="header-bar">
    <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
    <i class="fa fa-chevron-left previous"></i>
    <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">CONTACT US</h1>

    <div id="sideNavigation" class="sideNavigation" onclick="navClose()">
        <div class="logo">
            <img class="logo_white_login" src=" images/logo_white.png" alt="logo "><br>
        </div>
        <?php include 'menu.php'; ?>
    </div>

    <div class="cotainer">
        <img class="logo_white_login" src=" assets/images/favourite/Vector.png" alt="logo ">
        <br>
        <p style="font-weight: 100; font-size: 13px; color: #1b1b1b; text-shadow: none;" class="para">The main concept
            of DOOR TO DOOR is those
            start-ups is to connect people/neighbours in need
            of a
            service with others that could offer a service working from home or working near the area they live.
            Please
            contact us for the more details</p>
    </div>

    <div class="row icon">
        <div class="column fb">
            <img class="help_icons" src=" assets/images/favourite/fb.png" alt="logo ">
        </div>

        <div class="column fb">
            <img class="help_icons" src=" assets/images/favourite/insta.png" alt="logo ">
        </div>

        <div class="column fb">
            <img class="help_icons" src=" assets/images/favourite/twitter.png" alt="logo ">
        </div>

        <div class="column fb">
            <img class="help_icons" src=" assets/images/favourite/whatsap.png" alt="logo ">
        </div>

    </div>

</div>

<?php include 'bottom_navigation.php'; ?>


<div data-role="main" class="ui-content">
    <div id="my_bottom_buttons2">
        <a href="#myPopupDialog" data-rel="popup" data-position-to="window" data-transition="fade">
            <button class="ui-btn ui-btn-a ui-btn-my-a">SEND FEEDBACK</button>
        </a>
    </div>
    <div style="width: 320px; " data-role="popup" id="myPopupDialog">
        <div data-role="header">
            <h5>Send Feedback</h5>
        </div>

        <div data-role="main" class="ui-content">

            <label for="textarea-4">Enter Your Feedback:</label>
            <textarea data-mini="true" cols="40" rows="25" name="textarea-4" id="textarea-14"></textarea>
            <a href="#" data-rel="back">
                <button class="ui-btn ui-btn-a ui-btn-my-b"><i class="fa fa-paper-plane"></i> SEND</button>
            </a>
        </div>
    </div>
</div>


<script>
    function navOpen() {
        document.getElementById("sideNavigation").style.width = "250px";
    }

    function navClose() {
        document.getElementById("sideNavigation").style.width = "0";
    }

</script>

<?php include 'footer.php'; ?>