<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/InUp.css" type="text/css">
    <link rel="shortcut icon" href="/img/BurgerIcon.ico"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Вход</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
    <div class="main">
        <div class="half">
            <div class="logo">YUME</div>
            <div class="block_text">
                <div class="main_text">
                    <div class="main_big_text">Входите</div>
                    <div class="main_small_text">Мир вкусных приключений – мир бургерной</div>
                </div>
                <div class="about_text">Здесь вы найдёте всё, что нужно для идеального обеда: сочные котлеты из говядины, хрустящие овощи, вкуснейшие соусы и нежные булочки, приготовленные с любовью и заботой. Погрузитесь в мир бургеров и окунитесь в океан удовольствия!</div>
            </div>
            <div class="block_frame">
                <div class="frame">
                    <div class="top_text">
                        <div class="welcome">Добро пожаловать <span class="welcome_devworld">YUME</span></div>
                        <div class="no_account">Нет аккаунта? <br><a class="no_account_sign" href="logUp.php">Регистрация</a></div>
                    </div>
                    <div class="sign">Вход</div>
                    <div>
                        <div class="email_in">
                            <label for="email">Введите ваш адрес электронной почты</label>
                            <input type="email" id="email" placeholder="Электронная почта" name="email">
                        </div>
                        <div class="password">
                            <label for="password">Введите ваш пароль</label>
                            <input type="password" id="password" placeholder="Пароль" name="pass">
                        </div>
                        <div class="block_button">
                            <button class="button">Вход</button>
                        </div>
                    </div>
                    <div class="msg hide" id="flag">0</div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="/JS/fieldsIn.js"></script>
</body>
</html>