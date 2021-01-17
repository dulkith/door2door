
<div class="homeBackgound">
<?php include 'header.php'; ?>

    <div id="sideNavigation" class="sideNavigation" onclick="navClose()">
        <div class="logo">
            <img class="logo_white_login" src=" images/logo_white.png" alt="logo "><br>
        </div>
        <?php include 'menu.php'; ?>
    </div>

    <div data-role="header" data-position="fixed" class="header-bar">
        <i class="fa fa-bars fa-2x back-icon" onclick="navOpen()"></i>
        <i class="fa fa-chevron-left previous"></i>
        <h1 style="font-size: 20px; font-weight: 900;" class="page-detail">HELP</h1>
    </div>

    <div class="cotainer">
        <img class="logo_white_login" src=" assets/images/favourite/Vector.png" alt="logo ">
    </div>

    <div class="cotainer helpPage">
        <div data-role="collapsible-set" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-r"
             data-expanded-icon="arrow-d">
            <div data-role="collapsible">
                <h3><span>What is DOOR 2 DOOR?</span></h3>
                <p>The main concept of DOOR TO DOOR is those start-ups is to connect people/neighbours in need of a
                    service
                    with others that could offer a service working from home or working near the area they live. </p>
            </div>
            <div data-role="collapsible">
                <h3><span>How to order from this Application?</span></h3>
                <p>The main concept of DOOR TO DOOR is those start-ups is to connect people/neighbours in need of a
                    service
                    with others that could offer a service working from home or working near the area they live. </p>
            </div>
            <div data-role="collapsible">
                <h3><span>How to use promos QR codes?</span></h3>
                <p>The main concept of DOOR TO DOOR is those start-ups is to connect people/neighbours in need of a
                    service
                    with others that could offer a service working from home or working near the area they live. </p>
            </div>
            <div data-role="collapsible">
                <h3><span>Deliver methods we support?</span></h3>
                <p>The main concept of DOOR TO DOOR is those start-ups is to connect people/neighbours in need of a
                    service
                    with others that could offer a service working from home or working near the area they live. </p>
            </div>
            <div data-role="collapsible">
                <h3><span>Order cancel process</span></h3>
                <p>The main concept of DOOR TO DOOR is those start-ups is to connect people/neighbours in need of a
                    service
                    with others that could offer a service working from home or working near the area they live. </p>
            </div>
            <div data-role="collapsible">
                <h3><span>Why social distincing delivery?</span></h3>
                <p>The main concept of DOOR TO DOOR is those start-ups is to connect people/neighbours in need of a
                    service
                    with others that could offer a service working from home or working near the area they live. </p>
            </div>
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

    </script>
</div>

<?php include 'footer.php'; ?>