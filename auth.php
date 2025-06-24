<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Auth</title>
</head>
<body>
    <?php
        session_start();
        //Проверка наличия данных в сессии и обработка формы авторизации
        include "php\check_session.php";
        include "php\process_post.php";
    ?>
    <header>
        <div class="header-container">
            <a href="index.php"><img src="img/CyberNestLogo.png" alt="logo" style="width: 305px;"></a>
            <a href="news.php"><h3 class="orange-text">Новости</h3></a>
            <a href="services.php"><h3 class="orange-text">Услуги</h3></a>
            <a href="contacts.php"><h3 class="orange-text">Контакты</h3></a>
            <a href="auth.php"><img src="img/acc.png" alt="acc-button" style="width: 54px;"></a>
        </div>
    </header>
    <div class="auth-block">
        <div class="auth-head-container">
            <h1>ВОЙДИТЕ В АККАУНТ</h1>
            <!-- Вывод подсказок -->
            <p class="light-text"><?php if (isset($exception)) {echo "$exception";}?></p>
        </div>
        <form method="post" action="" class="auth-form">
            <input required type="text" placeholder="Логин" name="login" value="<?php if (isset($login)) {echo "$login";}?>">
            <input required type="password" placeholder="Пароль" name="password" value="<?php if (isset($password)) {echo "$password";}?>">
            <div class="auth-buttons-container" style="gap: 24px; margin-top: 50px;">
                <button class="button-blue" type="button" onclick="window.location.href='reg.php';">Нет аккаунта</button>
                <button class="button-orange" type="submit" name="post_auth">Войти</button>
            </div>
        </form>
    </div>
    <footer>
        <div class="footer-content">
            <img src="img/CyberNestLogo.png" alt="logo" style="width: 305px; height: 37px;">
            <div class="contacts">
                <h3 class="blue-text">+7 (999) 999-99-99</h3>
                <h3 class="blue-text">example@mail.com</h3>
            </div>
            <div class="messengers">
                <img src="img/vk.png" alt="vk" style="width: 65px; height: 38px; cursor: pointer;">
                <img src="img/tg.png" alt="tg" style="width: 54px; height: 53px; cursor: pointer;">
                <img src="img/yt.png" alt="yt" style="width: 65px; height: 65px; cursor: pointer;">
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>