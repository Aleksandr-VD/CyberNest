<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
    <?php
        // Обработка формы регистрации
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
    <div class="reg-block">
        <div class="reg-head-container">
            <h1>РЕГИСТРАЦИЯ</h1>
            <!-- Вывод подсказок -->
            <p class="light-text"><?php if (isset($exception)) {echo "$exception";}?></p>
        </div>
        <form method="post" action="" class="reg-form">
            <input required type="text" placeholder="Фамилия" name="surname" value="<?php if (isset($surname)) {echo "$surname";}?>">
            <input required type="text" placeholder="Имя" name="name" value="<?php if (isset($name)) {echo "$name";}?>">
            <input required type="email" placeholder="Почта" name="email" value="<?php if (isset($email)) {echo "$email";}?>">
            <input required type="text" placeholder="Телефон" name="phone" id="phone" value="<?php if (isset($phone)) {echo "$phone";}?>">
            <input required type="text" placeholder="Логин" name="login" value="<?php if (isset($login)) {echo "$login";}?>">
            <input required type="password" placeholder="Пароль" name="password" value="<?php if (isset($password)) {echo "$password";}?>">
            <input required type="password" placeholder="Повторите пароль" name="double_password" value="<?php if (isset($doublePassword)) {echo "$doublePassword";}?>">
            <div class="reg-button-container" style="gap: 24px; margin-top: 50px;">
                <button class="button-orange" type="submit" name="post_reg">Регистрация</button>
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
    <script>
        //Скрипт маски ввода номера телефона
        const phoneInput = document.getElementById('phone');

        phoneInput.addEventListener('input', function() {
            const value = this.value;
            
            // Удаляем все нецифровые символы
            let cleaned = value.replace(/\D/g, '');
            
            // Ограничиваем длину до 11 цифр
            cleaned = cleaned.substring(0, 11);
            
            // Заменяем 8 в начале на 7
            if (cleaned.startsWith('8')) {
                cleaned = '7' + cleaned.substring(1);
            }
            
            // Добавляем 7 в начало при необходимости
            if (cleaned.length > 0 && !cleaned.startsWith('7')) {
                cleaned = '7' + cleaned;
                cleaned = cleaned.substring(0, 11);
            }
            
            // Форматируем номер по шаблону
            let formatted = '+7';
            if (cleaned.length > 1) {
                // Добавляем первые 3 цифры после 7
                formatted += ' (' + cleaned.substring(1, 4);
                
                // Закрываем скобку после 4-го символа
                if (cleaned.length >= 4) formatted += ')';
                
                // Добавляем вторую группу цифр
                if (cleaned.length > 4) {
                    formatted += ' ' + cleaned.substring(4, 7);
                }
                
                // Добавляем первую часть последней группы
                if (cleaned.length > 7) {
                    formatted += '-' + cleaned.substring(7, 9);
                }
                
                // Добавляем вторую часть последней группы
                if (cleaned.length > 9) {
                    formatted += '-' + cleaned.substring(9, 11);
                }
            }
            
            // Обновляем значение поля
            this.value = formatted;
        });
    </script>
</body>
</html>