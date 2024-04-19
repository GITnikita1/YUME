<?php
    session_start();
    $user = isset($_SESSION["name"])? $_SESSION["name"] : null;
?>
<link rel="stylesheet" href="../blocks/headercss.css">
<nav>
    <div class="_logo"><a href="../main/main.php"><img src="/main/image.png" alt=""></a></div>
    <div class="strip">
        <table class="strip_menu">
            <tr>
                <th><a class="string" href="../menu/menu.php">Меню</a></th>
                <th><a class="string" href="../map/map.php">Карта</a></th>
                <th><a class="string" href="../about_us/about_us.php">О нас</a></th>
                <th><i class="fa-regular fa-moon string"></i></th>
                <th><i class="fa-solid fa-language string"></i></th>
                <th><a href="../basket/basket.php"><i class="fa-solid fa-basket-shopping string"></i></a></th>
                <?php if (isset($user)):?>
                <th class="user"><?=$user?></th>
                <?php endif;?>
            </tr>
        </table>
    </div>
</nav>
