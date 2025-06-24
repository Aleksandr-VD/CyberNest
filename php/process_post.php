<?php    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        include "config.php"; //Подключение к БД
        include "process_reg.php"; //Обработка формы регистрации
        include "process_auth.php"; //Обработка формы авторизации
        include "process_problem.php"; //Обработка формы обратной связи
    }
?>