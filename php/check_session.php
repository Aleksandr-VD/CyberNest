<?php
    if (isset($_SESSION['login'])) { //Проверка наличия переменной login в сессии
        if ($_SESSION['id_role'] == 1) {
            header("location: account.php"); //Редирект на личный кабинет если переменная роли пользователя равна 1
        }
        if ($_SESSION['id_role'] == 2) {
            header("location: admin.php"); //Редирект на панель администратора если переменная роли пользователя равна 2
        }
        die;
    }
?>