<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Forget Password</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="themes/door2door.css" />
    <link rel="stylesheet" href="themes/door2door.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="style/styles.css">

</head>

<body>

    <div class="resetBackgound">

        <div class="cotainer">
            <h3 style="color: aliceblue">Forget Password</h3>

            <span style="float:right; color: aliceblue; font-weight: 100;">
                Enter your email and we will send your <br>password reset instructions to email address.
            </span>

            <form class="loginForm" action="/action_page.php">
                <input type="text" data-clear-btn="true" id="text1" placeholder="Email Address">
                <br>


            </form>
            <div id="my_bottom_buttons">
                <a href="buyer_login.php" rel="external">
                    <button class="ui-btn ui-btn-a ui-btn-my-a">Reset</button>
                </a>
            </div>
        </div>
    </div>

</body>

</html>