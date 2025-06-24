<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Contacts</title>
</head>
<body>
    <header>
        <div class="header-container">
            <a href="index.php"><img src="img/CyberNestLogo.png" alt="logo" style="width: 305px;"></a>
            <a href="news.php"><h3 class="orange-text">Новости</h3></a>
            <a href="services.php"><h3 class="orange-text">Услуги</h3></a>
            <a href="contacts.php"><h3 class="orange-text">Контакты</h3></a>
            <a href="auth.php"><img src="img/acc.png" alt="acc-button" style="width: 54px;"></a>
        </div>
    </header>
    <?php
        // Обработка формы обратной связи
        include "php\process_post.php";
    ?>
    <div class="support-form-block">
        <div class="support-form-head-container" style="margin-bottom: 70px;">
            <h1>ЧТО СЛОМАЛОСЬ НА САЙТЕ?</h1>
            <!-- Вывод подсказок -->
            <p class="light-text"><?php if (isset($answer)) {echo "$answer";}?></p>
        </div>
        <form action="" method="post">
            <input required type="email" placeholder="email" name="email">
            <textarea required name="problem" id="problem" placeholder="Опишите проблему" rows="9" maxlength="700"></textarea>
            <div class="support-form-button-container">
                <button class="button-orange" type="submit" name="post_problem">Отправить</button>
            </div>
        </form>
    </div>
    <div class="contacts-block">
        <div class="contact-card" style="background-color: #E26539; height: 532px; width: 564px;">
            <h1 class="dark-text">КОМПАНИЯ</h1>
            <p class="dark-text">г. Москва, ул. Пушкина 10, подъезд 3, этаж 2, кв. 25</p>
            <h3 class="dark-text">+7 (999) 999-99-99</h3>
            <p class="dark-text">с 8:00 до 17:00</p>
            <p class="dark-text">info@cybernest.ru</p>
        </div>
        <div class="cards-left">
            <div class="contact-card" style="background-color: #61C3FF; height: 391px; width: 544px;">
                <h1 class="dark-text">РЕКЛАМА</h1>
                <h3 class="dark-text">+7 (999) 999-99-99</h3>
                <p class="dark-text">integrations@cybernest.ru</p>
            </div>
            <div class="contact-card" style="background-color: #ECEFF4; height: 504px; width: 544px;">
                <h1 class="dark-text">КЛУБ</h1>
                <p class="dark-text">г. Москва, ул. Ленина 15, подъезд 4, этаж 1</p>
                <h3 class="dark-text">+7 (999) 999-99-99</h3>
                <p class="dark-text">Круглосуточно</p>
                <p class="dark-text">club@cybernest.ru</p>
            </div>
        </div>
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
</body>
</html>