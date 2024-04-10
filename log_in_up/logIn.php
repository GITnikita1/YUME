<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/InUp.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/img/BurgerIcon.ico"/>
    <title>Sign in</title>
</head>
<body>
    <div class="main">
        <div class="half">
            <div class="logo">YUME</div>
            <div class="block_text">
                <div class="main_text">
                    <div class="main_big_text">Sign in to</div>
                    <div class="main_small_text">The world of delicious adventures - the world of a burger shop</div>
                </div>
                <div class="about_text">Here you will find everything you need for the perfect lunch: juicy beef patties, crisp vegetables, delicious sauces and tender buns made with love and care. Immerse yourself in the world of burgers and plunge into the ocean of pleasure!</div>
            </div>
            <div class="block_frame">
                <div class="frame">
                    <div class="top_text">
                        <div class="welcome">Welcome to <span class="welcome_devworld">YUME</span></div>
                        <div class="no_account">No Account? <br><a class="no_account_sign" href="logUp.php">Sign up</a></div>
                    </div>
                    <div class="sign">Sign in</div>
                    <form action="entry.php" method="post">
                        <div class="email_in">
                            <label for="email">Enter your email address</label>
                            <input type="email" id="email" placeholder="Email address" name="email">
                        </div>
                        <div class="password">
                            <label for="password">Enter your Password</label>
                            <input type="password" id="password" placeholder="Password" name="pass">
                        </div>
                        <div class="block_button">
                            <button class="button" type="submit">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>