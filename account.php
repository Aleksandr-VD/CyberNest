<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Account</title>
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
        session_start();
        if (isset($_POST['logout'])) { //Обработка кнопки выхода из аккаунта
            session_unset(); //Очищение сессии
            session_destroy(); //Уничтожение сессии
            header("Location: auth.php"); //Редирект на страницу авторизации
            exit();
        }
        include "php\process_booking.php"; //Обработка формы бронирования сеанса
    ?>
    <div class="booking-window">
        <div class="cross-container">
            <img src="img/crossIcon.png" alt="exit" style="width: 50px; cursor: pointer;" class="close-window-button">
        </div>
        <form method="post" action="" class="booking-form">
            <select name="pc-select" id="pc-select" class="time-select" style="margin-bottom: 20px; cursor: pointer;">
                <!-- Вывод всех свободных мест -->
                <?php include "php\places.php"?>
            </select>
            <select name="tariff-select" id="tariff-select" class="time-select" style="margin-bottom: 20px; cursor: pointer;">
                <option value="1">Поминутно</option>
                <option value="2">1 час</option>
                <option value="3">3 часа</option>
                <option value="4">5 часов</option>
                <option value="5">Ночь (с 22:00 до 8:00)</option>
            </select>
            <select name="time-select" id="time-select" class="time-select" style="margin-bottom: 20px; cursor: pointer;">
                <option value="00:00:00">0:00</option>
                <option value="01:00:00">1:00</option>
                <option value="02:00:00">2:00</option>
                <option value="03:00:00">3:00</option>
                <option value="04:00:00">4:00</option>
                <option value="05:00:00">5:00</option>
                <option value="06:00:00">6:00</option>
                <option value="07:00:00">7:00</option>
                <option value="08:00:00">8:00</option>
                <option value="09:00:00">9:00</option>
                <option value="10:00:00">10:00</option>
                <option value="11:00:00">11:00</option>
                <option value="12:00:00">12:00</option>
                <option value="13:00:00">13:00</option>
                <option value="14:00:00">14:00</option>
                <option value="15:00:00">15:00</option>
                <option value="16:00:00">16:00</option>
                <option value="17:00:00">17:00</option>
                <option value="18:00:00">18:00</option>
                <option value="19:00:00">19:00</option>
                <option value="20:00:00">20:00</option>
                <option value="21:00:00">21:00</option>
                <option value="22:00:00">22:00</option>
                <option value="23:00:00">23:00</option>
            </select>
            <input type="date" style="margin-bottom: 50px;" name="date-select">
            <div class="booking-button-container">
                <button class="button-orange" type="submit" name="post_booking">Забронировать</button>
            </div>
        </form>
    </div>
    <div class="sessions-block">
        <h1 style="text-transform: uppercase;">приветствуем вас, <?php echo $_SESSION['login']?>!</h1>
        <div class="coming-sessions">
            <div class="session-head-container">
                <h2 class="orange-text">Сеансы</h2>
            </div>
            <div class="sessions-container">
                <!-- Вывод всех сеансов пользователя -->
                <?php include "php\sessions.php";?>
            </div>
            <form class="session-button-container" method="post" action="">
                <button class="button-blue" style="margin-right: 20px;" type="submit" name="logout">Выход</button>
                <button class="button-orange open-booking-window-button" type="button">Забронировать</button>
            </form>
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
    <script src="script.js"></script>
</body>
</html>