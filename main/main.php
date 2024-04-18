<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main/main.css">
    <link rel="shortcut icon" href="/img/BurgerIcon.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Primary list</title>
</head>
<body>
    <?php include "..\blocks\header.php"; ?>
    <header>
        <img src="/img/main_img.png" alt="" width="100%">
    </header>

    <div class="spine">
        <div class="container1">
            <div class="box women"><img src="/main/women1.jpg" alt="" width="100%" height="100%"></div>
            <div class="box info">
                <h2>А ВОТ ЭТО УЖЕ ИНТЕРЕСНО</h2>
                <p>В нашем ресторане специальное недельное меню, которое не даст вам наскучиться одним и тем же вкусом бургеров.</p>
                <div class="butn"><p>Узнать подробнее</p></div>
            </div>
        </div>
        <h3>МЕНЮ</h3>
        <div class="container2">
            <div class="position one">
                <div class="photo"><img src="/img/main_img.png" alt="" width="100%"></div>
                <div class="description"><p>Бургеры</p></div>
            </div>
            <div class="position two">
                <div class="photo"></div>
                <div class="description"><p>Гарниры</p></div>
            </div>
            <div class="position three">
                <div class="photo"></div>
                <div class="description"><p>Салаты</p></div>
            </div>
            <div class="position four">
                <div class="photo"></div>
                <div class="description"><p>Напитки</p></div>
            </div>
        </div>
        <h3>ЗАКАЗЫ</h3>
        <div class="container3">
            <div class="phase1">
                <div class="order"></div>
                <div class="burger"></div>
            </div>
            <div class="minimap"></div>
        </div>
    </div>


    
    <?php include '..\blocks\footer.php'; ?>

</body>
</html>