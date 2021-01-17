<?php include 'header.php'; ?>

<body>

<div class="loginBackgound">

    <div class="cotainer">
        <img class="logo_white_login" src="images/logo_white.png" alt="logo ">

        <form class="loginForm" action="/action_page.php">
            <input type="text" data-clear-btn="true" id="text1" placeholder="Username">
            <br>
            <input type="text" data-clear-btn="true" id="text1" placeholder="Password">
            <p style="float:right">
                <a href="buyer_forget.php" rel="external"><span class="darkText">Forget Password?</p></a>

            <br><br><br><br>
        </form>
        <a href="buyer_start.php" rel="external">
            <button class="ui-btn ui-btn-a ui-btn-my-a">Login</button>
        </a>

        <p style="float:right"><span class="darkText">Do not have account? </span><a href="buyer_register.php"
                                                                                     rel="external"><span
                        class="linkText">Sign in</span></a></p>
    </div>
</div>

<?php include 'footer.php'; ?>