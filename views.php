<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Views</title>
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
    ?>
    <div class="tables-block">
        <h1 style="text-transform: uppercase;">приветствуем вас, <?php echo $_SESSION['login']?>!</h1>
        <div class="tables">
            <div class="session-head-container">
                <h2 class="orange-text">Представления</h2>
            </div>
            <form class="views-button-container" method="post" action="">
                <button class="button-orange open-booking-window-button" type="button" style="margin-right: 20px;" onclick="window.location.href='admin.php';">Таблицы</button>
                <button class="button-blue" type="submit" name="logout">Выход</button>
                <select onchange="this.form.submit()" name="view-select" id="table-select" class="view-select" style="margin-top: 100px; cursor: pointer;">
                    <option value="view1" <?php if (!empty($_POST['view-select']) and $_POST['view-select'] === 'view1') echo 'selected'; ?>>1 - Оборудование определенного типа и характеристики</option>
                    <option value="view2" <?php if (!empty($_POST['view-select']) and $_POST['view-select'] === 'view2') echo 'selected'; ?>>2 - Зарегистрированные клиенты</option>
                    <option value="view3" <?php if (!empty($_POST['view-select']) and $_POST['view-select'] === 'view3') echo 'selected'; ?>>3 - Доступные игры</option>
                    <option value="view4" <?php if (!empty($_POST['view-select']) and $_POST['view-select'] === 'view4') echo 'selected'; ?>>4 - Места с определенным типом оборудования</option>
                    <option value="view5" <?php if (!empty($_POST['view-select']) and $_POST['view-select'] === 'view5') echo 'selected'; ?>>5 - Посетители по ночномы тарифу с местом определенного класса</option>
                    <option value="view6" <?php if (!empty($_POST['view-select']) and $_POST['view-select'] === 'view6') echo 'selected'; ?>>6 - Игры, заказанные более 2 раз</option>
                    <option value="view7" <?php if (!empty($_POST['view-select']) and $_POST['view-select'] === 'view7') echo 'selected'; ?>>7 - Свободные компьютеры в определенное время</option>
                    <option value="view8" <?php if (!empty($_POST['view-select']) and $_POST['view-select'] === 'view8') echo 'selected'; ?>>8 - Количество арендованных компьютеров</option>
                    <option value="view9" <?php if (!empty($_POST['view-select']) and $_POST['view-select'] === 'view9') echo 'selected'; ?>>9 - Компьютеры, арендованные определенным клиентом в определенное время</option>
                    <option value="view10" <?php if (!empty($_POST['view-select']) and $_POST['view-select'] === 'view10') echo 'selected'; ?>>10 - Тарифы, выбранные в определенный день в месте определенного класса</option>
                </select>
            </form>
        </div>
        <div class="tables-container">
            <!-- Вывод выбранного представления -->
            <?php include "php/view_show.php"?>
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