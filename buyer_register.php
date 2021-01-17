<?php include 'header.php';?>

    <div class="registerBackgound">

        <div class="cotainer">
            <img class="logo_white_login" src="images/logo_white.png" alt="logo ">

            <form class="registerForm" action="buyer_login.php">
                <input type="text" data-clear-btn="true" id="text1" placeholder="Username">
                <input type="text" data-clear-btn="true" id="text1" placeholder="Mobile Number">
                <input type="text" data-clear-btn="true" id="text1" placeholder="Email Address">
                <input type="text" data-clear-btn="true" id="text1" placeholder="Password">
                <input type="text" data-clear-btn="true" id="text1" placeholder="Confirm Password">

                <br><br><br><br>

            </form>
            <a id="my_centered_buttons">
                <a href="buyer_login.php" rel="external">
                    <button class="ui-btn ui-btn-a ui-btn-my-a">Register</button>
                </a>
                <p style="float:right"><span class="darkText">Allready have an account ? </span>
                    <a href="buyer_login.php" rel="external"><span class="linkText" >Login</span>
                    </a>
                </p>

        </div>

    </div>

<?php include 'footer.php';?>