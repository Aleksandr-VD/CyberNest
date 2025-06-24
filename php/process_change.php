<?php
    include "config.php";
    if (isset($_SESSION['table-name'])) {
        $nameTable = $_SESSION['table-name']; //Запись выбранной таблицы в переменную из сессии
        switch ($nameTable) { //Выполнение кода в зависимости от названия таблицы
            case 'classes':
                if (isset($_POST['post_insert'])) { //Обработка кнопки добавления данных
                    //Запись в переменные данных из формы
                    $name = $_POST['write-class-name'];
                    $device = $_POST['select-device-id'];
                    $sql = ("INSERT INTO classes (class_name, id_device) VALUES ('$name', '$device');"); //Запрос на добавление данных в БД
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_change'])) { //Обработка кнопки изменения данных
                    //Запись в переменные данных из формы
                    $name = $_POST['write-class-name'];
                    $device = $_POST['select-device-id'];
                    $id = $_POST['id-select'];
                    $sql = ("UPDATE classes SET class_name = '$name', id_device = $device WHERE id_class = $id;"); //Запрос на изменение данных в БД
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_delete'])) { //Обработка кнопки удаления данных
                    $id = $_POST['id-select'];
                    $sql = ("DELETE FROM classes WHERE id_class = $id;"); //Запрос на удаление данных из БД
                    mysqli_query($conn, $sql);
                }
                break;
            case 'devices':
                if (isset($_POST['post_insert'])) {
                    $type = $_POST['write-type-name'];
                    $cpu = $_POST['write-cpu-name'];
                    $gpu = $_POST['write-gpu-name'];
                    $ram = $_POST['write-ram-name'];
                    $ssd = $_POST['write-ssd-name'];
                    $os = $_POST['write-os-name'];
                    $sql = ("INSERT INTO devices (type, CPU, GPU, RAM, SSD, OS) VALUES ('$type', '$cpu', '$gpu', '$ram', '$ssd', '$os');");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_change'])) {
                    $type = $_POST['write-type-name'];
                    $cpu = $_POST['write-cpu-name'];
                    $gpu = $_POST['write-gpu-name'];
                    $ram = $_POST['write-ram-name'];
                    $ssd = $_POST['write-ssd-name'];
                    $os = $_POST['write-os-name'];
                    $id = $_POST['id-select'];
                    $sql = ("UPDATE devices SET type = '$type', CPU = '$cpu', GPU = '$gpu', RAM = '$ram', SSD = '$ssd', OS = '$os' WHERE id_device = $id;");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_delete'])) {
                    $id = $_POST['id-select'];
                    $sql = ("DELETE FROM devices WHERE id_device = $id;");
                    mysqli_query($conn, $sql);
                }
                break;
            case 'games':
                if (isset($_POST['post_insert'])) {
                    $name = $_POST['write-game-name'];
                    $sql = ("INSERT INTO games (name) VALUES ('$name');");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_change'])) {
                    $name = $_POST['write-game-name'];
                    $id = $_POST['id-select'];
                    $sql = ("UPDATE games SET name = '$name' WHERE id_game = $id;");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_delete'])) {
                    $id = $_POST['id-select'];
                    $sql = ("DELETE FROM games WHERE id_game = $id;");
                    mysqli_query($conn, $sql);
                }
                break;
            case 'packs':
                if (isset($_POST['post_insert'])) {
                    $name = $_POST['write-pack-name'];
                    $sql = ("INSERT INTO packs (name) VALUES ('$name');");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_change'])) {
                    $name = $_POST['write-pack-name'];
                    $id = $_POST['id-select'];
                    $sql = ("UPDATE packs SET name = '$name' WHERE id_pack = $id;");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_delete'])) {
                    $id = $_POST['id-select'];
                    $sql = ("DELETE FROM packs WHERE id_pack = $id;");
                    mysqli_query($conn, $sql);
                }
                break;
            case 'places':
                if (isset($_POST['post_insert'])) {
                    $name = $_POST['write-place-name'];
                    $busy = $_POST['select-busy'];
                    $class = $_POST['select-class-id'];
                    $sql = ("INSERT INTO places (name, busy, id_class) VALUES ('$name', '$busy', '$class');");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_change'])) {
                    $name = $_POST['write-place-name'];
                    $busy = $_POST['select-busy'];
                    $class = $_POST['select-class-id'];
                    $id = $_POST['id-select'];
                    $sql = ("UPDATE places SET name = '$name', busy = '$busy', id_class = '$class' WHERE id_place = $id;");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_delete'])) {
                    $id = $_POST['id-select'];
                    $sql = ("DELETE FROM places WHERE id_place = $id;");
                    mysqli_query($conn, $sql);
                }
                break;
            case 'roles':
                if (isset($_POST['post_insert'])) {
                    $name = $_POST['write-role-name'];
                    $sql = ("INSERT INTO roles (name) VALUES ('$name');");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_change'])) {
                    $name = $_POST['write-role-name'];
                    $id = $_POST['id-select'];
                    $sql = ("UPDATE roles SET name = '$name' WHERE id_role = $id;");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_delete'])) {
                    $id = $_POST['id-select'];
                    $sql = ("DELETE FROM roles WHERE id_role = $id;");
                    mysqli_query($conn, $sql);
                }
                break;
            case 'sessions':
                if (isset($_POST['post_insert'])) {
                    $time = $_POST['datetime-select'];
                    $user = $_POST['select-user-id'];
                    $tariff = $_POST['select-tariff-id'];
                    $place = $_POST['select-place-id'];
                    $game = $_POST['select-game-id'];
                    $sql = ("INSERT INTO sessions (time, id_user, id_tariff, id_place, id_game) VALUES ('$time', '$user', '$tariff', '$place', '$game');");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_change'])) {
                    $time = $_POST['datetime-select'];
                    $user = $_POST['select-user-id'];
                    $tariff = $_POST['select-tariff-id'];
                    $place = $_POST['select-place-id'];
                    $game = $_POST['select-game-id'];
                    $id = $_POST['id-select'];
                    $sql = ("UPDATE sessions SET time = '$time', id_user = '$user', id_tariff = '$tariff', id_place = '$place', id_game = '$game' WHERE id_session = $id;");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_delete'])) {
                    $id = $_POST['id-select'];
                    $sql = ("DELETE FROM sessions WHERE id_session = $id;");
                    mysqli_query($conn, $sql);
                }
                break;
            case 'tariffs':
                if (isset($_POST['post_insert'])) {
                    $price = $_POST['write-price'];
                    $pack = $_POST['select-pack-id'];
                    $class = $_POST['select-class-id'];
                    $sql = ("INSERT INTO tariffs (price, id_pack, id_class) VALUES ('$price', '$pack', '$class');");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_change'])) {
                    $price = $_POST['write-price'];
                    $pack = $_POST['select-pack-id'];
                    $class = $_POST['select-class-id'];
                    $id = $_POST['id-select'];
                    $sql = ("UPDATE tariffs SET price = '$price', id_pack = '$pack', id_class = '$class' WHERE id_tariff = $id;");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_delete'])) {
                    $id = $_POST['id-select'];
                    $sql = ("DELETE FROM tariffs WHERE id_tariff = $id;");
                    mysqli_query($conn, $sql);
                }
                break;
            case 'users':
                if (isset($_POST['post_insert'])) {
                    $surname = $_POST['write-surname'];
                    $name = $_POST['write-name'];
                    $email = $_POST['write-email'];
                    $phone = $_POST['write-phone'];
                    $login = $_POST['write-login'];
                    $password = $_POST['write-password'];
                    $role = $_POST['select-role-id'];
                    $sql = ("INSERT INTO users (surname, name, email, phone, login, password, id_role) VALUES ('$surname', '$name', '$email', '$phone', '$login', '$password', '$role');");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_change'])) {
                    $surname = $_POST['write-surname'];
                    $name = $_POST['write-name'];
                    $email = $_POST['write-email'];
                    $phone = $_POST['write-phone'];
                    $login = $_POST['write-login'];
                    $password = $_POST['write-password'];
                    $role = $_POST['select-role-id'];
                    $id = $_POST['id-select'];
                    $sql = ("UPDATE users SET surname = '$surname', name = '$name', email = '$email', phone = '$phone', login = '$login', password = '$password', id_role = '$role' WHERE id_user = $id;");
                    mysqli_query($conn, $sql);
                }
                if (isset($_POST['post_delete'])) {
                    $id = $_POST['id-select'];
                    $sql = ("DELETE FROM users WHERE id_user = $id;");
                    mysqli_query($conn, $sql);
                }
                break;
        }
    }
?>