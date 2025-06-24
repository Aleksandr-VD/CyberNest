<?php
    $conn = mysqli_connect($servername = "localhost", $username = "root", $password = "", $dbname = "pc_club_db"); //Подключение к БД

    if (!$conn) {
        die("Ошибка подключения: " . mysqli_connect_error()); //Обработка ошибки подключения
    }
?>