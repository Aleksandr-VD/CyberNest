<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
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
        include "php\process_change.php"; //Обработка формы изменения таблицы
    ?>
    <div class="booking-window">
        <div class="cross-container">
            <img src="img/crossIcon.png" alt="exit" style="width: 50px; cursor: pointer;" class="close-window-button">
        </div>
        <form method="post" action="" class="booking-form">
            <!-- Вывод атрибутов выбранной таблицы для редактирования -->
            <?php include "php/table_attributes_show.php";?>
            <div class="change-button-container">
                <select name="id-select" id="id-select" class="id-select" style="margin-bottom: 20px; cursor: pointer;">
                    <!-- Вывод всех id записей из таблицы -->
                    <?php include "php\id_table_show.php"; ?>
                </select>
                <button class="button-orange" type="submit" name="post_insert">Добавить</button>
                <button class="button-orange" type="submit" name="post_change">Изменить</button>
                <button class="button-orange" type="submit" name="post_delete">Удалить</button>
            </div>
        </form>
    </div>
    <div class="tables-block">
        <h1 style="text-transform: uppercase;">приветствуем вас, <?php echo $_SESSION['login']?>!</h1>
        <div class="tables">
            <div class="session-head-container">
                <h2 class="orange-text">Таблицы</h2>
            </div>
            <form class="tables-button-container" method="post" action="" id="table">
                <button class="button-orange open-booking-window-button" type="button" style="margin-right: 20px;">Изменить</button>
                <button class="button-orange open-booking-window-button" type="button" style="margin-right: 20px;" onclick="window.location.href='views.php';">Представления</button>
                <button class="button-blue" type="submit" name="logout">Выход</button>
                <select onchange="this.form.submit()" name="table-select" id="table-select" class="table-select" style="margin-top: 100px; cursor: pointer;">
                    <option value="classes" <?php if (!empty($_POST['table-select']) and $_POST['table-select'] === 'classes') echo 'selected'; ?>>Классы</option>
                    <option value="devices" <?php if (!empty($_POST['table-select']) and $_POST['table-select'] === 'devices') echo 'selected'; ?>>Устройства</option>
                    <option value="games" <?php if (!empty($_POST['table-select']) and $_POST['table-select'] === 'games') echo 'selected'; ?>>Игры</option>
                    <option value="packs" <?php if (!empty($_POST['table-select']) and $_POST['table-select'] === 'packs') echo 'selected'; ?>>Пакеты</option>
                    <option value="places" <?php if (!empty($_POST['table-select']) and $_POST['table-select'] === 'places') echo 'selected'; ?>>Места</option>
                    <option value="roles" <?php if (!empty($_POST['table-select']) and $_POST['table-select'] === 'roles') echo 'selected'; ?>>Роли</option>
                    <option value="sessions" <?php if (!empty($_POST['table-select']) and $_POST['table-select'] === 'sessions') echo 'selected'; ?>>Сеансы</option>
                    <option value="tariffs" <?php if (!empty($_POST['table-select']) and $_POST['table-select'] === 'tariffs') echo 'selected'; ?>>Тарифы</option>
                    <option value="users" <?php if (!empty($_POST['table-select']) and $_POST['table-select'] === 'users') echo 'selected'; ?>>Пользователи</option>
                </select>
            </form>
        </div>
        <div class="tables-container">
            <!-- Отображение выбранной таблицы -->
            <?php include "php/table_show.php"?>
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