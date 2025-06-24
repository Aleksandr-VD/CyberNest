<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['post_booking'])) {

        include "config.php";

        //Запись в переменные данных из формы
        $time = $_POST['date-select'];
        $time .= " ";
        $time .= $_POST['time-select'];
        $id_user = $_SESSION['id_user'];
        $place = $_POST['pc-select'];
        $pack = $_POST['tariff-select'];
        $game = rand(1,6);

        //Выполнение запроса на получения класса оборудования выбранного места
        $classQuery = "SELECT id_class FROM places WHERE places.id_place = $place";
        $classResult = mysqli_query($conn, $classQuery);
        $rowClass = mysqli_fetch_assoc($classResult);

        //Выполнение запроса на получение тарифа выбранного пакета и класса
        $tariffQuery = "SELECT id_tariff FROM tariffs WHERE tariffs.id_pack = $pack AND tariffs.id_class = " . $rowClass['id_class'] . ";";
        $tariffResult = mysqli_query($conn, $tariffQuery);
        $rowTariff = mysqli_fetch_assoc($tariffResult);
        $id_tariff = $rowTariff['id_tariff'];

        //Добавление в БД полученных данных
        $sql = "INSERT INTO sessions (time, id_user, id_tariff, id_place, id_game) VALUES ('$time', '$id_user', '$id_tariff', '$place', '$game');";
        $result = mysqli_query($conn, $sql);
    }
?>