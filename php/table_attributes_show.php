<?php
    include "config.php";
    if (isset($_POST['table-select'])) {
        $tableName = htmlspecialchars($_POST['table-select']); //Переменная с выбранной таблицей
        switch ($tableName) { //Вывод разной html разметки в зависимости от выбранной таблицы
            case 'classes':
                $sql = ("SELECT * FROM devices;"); //Запрос на получение данных из таблицы устройств
                $result = mysqli_query($conn, $sql);
                //Вывод поля для ввода названия класса оборудования
                echo '<input required name="write-class-name" type="text" style="margin-bottom: 20px;" placeholder="Название">';
                //Вывод выпадающего списка с выбором внешнего ключа устройства
                echo '<select name="select-device-id" id="pc-select" class="table-change-select" style="margin-bottom: 20px; cursor: pointer; width: 440px;">';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id_device'] . '">' . $row['id_device'] . ' - ' . $row['type'] . '</option>';
                }
                echo '</select>';
                break;
            case 'devices':
                echo '<input required name="write-type-name" type="text" style="margin-bottom: 20px;" placeholder="Тип">';
                echo '<input required name="write-cpu-name" type="text" style="margin-bottom: 20px;" placeholder="Процессор">';
                echo '<input required name="write-gpu-name" type="text" style="margin-bottom: 20px;" placeholder="Видеокарта">';
                echo '<input required name="write-ram-name" type="text" style="margin-bottom: 20px;" placeholder="Оперативная память">';
                echo '<input required name="write-ssd-name" type="text" style="margin-bottom: 20px;" placeholder="Постоянная память">';
                echo '<input required name="write-os-name" type="text" style="margin-bottom: 20px;" placeholder="ОС">';
                break;
            case 'games':
                echo '<input required name="write-game-name" type="text" style="margin-bottom: 20px;" placeholder="Игра">';
                break;
            case 'packs':
                echo '<input required name="write-pack-name" type="text" style="margin-bottom: 20px;" placeholder="Пакет">';
                break;
            case 'places':
                $sql = ("SELECT * FROM classes;");
                $result = mysqli_query($conn, $sql);
                echo '<input required name="write-place-name" type="text" style="margin-bottom: 20px;" placeholder="Название">';
                echo '<select name="select-busy" id="pc-select" class="table-change-select" style="margin-bottom: 20px; cursor: pointer; width: 440px;">';
                echo '<option value="0">Свободно</option>';
                echo '<option value="1">Занято</option>';
                echo '</select>';
                echo '<select name="select-class-id" id="pc-select" class="table-change-select" style="margin-bottom: 20px; cursor: pointer; width: 440px;">';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id_class'] . '">' . $row['id_class'] . ' - ' . $row['class_name'] . '</option>';
                }
                echo '</select>';
                break;
            case 'roles':
                echo '<input required name="write-role-name" type="text" style="margin-bottom: 20px;" placeholder="Название роли">';
                break;
            case 'sessions':
                $sqlUser = ("SELECT * FROM users;");
                $resultUser = mysqli_query($conn, $sqlUser);
                $sqlTariff = ("SELECT * FROM tariffs JOIN packs ON packs.id_pack = tariffs.id_pack JOIN classes ON classes.id_class = tariffs.id_class");
                $resultTariff = mysqli_query($conn, $sqlTariff);
                $sqlPlace = ("SELECT * FROM places;");
                $resultPlace = mysqli_query($conn, $sqlPlace);
                $sqlGame = ("SELECT * FROM games;");
                $resultGame = mysqli_query($conn, $sqlGame);
                echo '<input required type="datetime-local" style="margin-bottom: 50px;" name="datetime-select">';
                echo '<select name="select-user-id" id="pc-select" class="table-change-select" style="margin-bottom: 20px; cursor: pointer; width: 440px;">';
                while ($row = mysqli_fetch_assoc($resultUser)) {
                    echo '<option value="' . $row['id_user'] . '">' . $row['id_user'] . ' - ' . $row['login'] . '</option>';
                }
                echo '</select>';
                echo '<select name="select-tariff-id" id="pc-select" class="table-change-select" style="margin-bottom: 20px; cursor: pointer; width: 440px;">';
                while ($row = mysqli_fetch_assoc($resultTariff)) {
                    echo '<option value="' . $row['id_tariff'] . '">' . $row['id_tariff'] . ' - ' . $row['class_name'] . ' - ' . $row['name'] . '</option>';
                }
                echo '</select>';
                echo '<select name="select-place-id" id="pc-select" class="table-change-select" style="margin-bottom: 20px; cursor: pointer; width: 440px;">';
                while ($row = mysqli_fetch_assoc($resultPlace)) {
                    echo '<option value="' . $row['id_place'] . '">' . $row['id_place'] . ' - ' . $row['name'] . ' - ' . $row['busy'] . ' (Свободно/Занято)' . '</option>';
                }
                echo '</select>';
                echo '<select name="select-game-id" id="pc-select" class="table-change-select" style="margin-bottom: 20px; cursor: pointer; width: 440px;">';
                while ($row = mysqli_fetch_assoc($resultGame)) {
                    echo '<option value="' . $row['id_game'] . '">' . $row['id_game'] . ' - ' . $row['name'] . '</option>';
                }
                echo '</select>';
                break;
            case 'tariffs':
                $sqlPack = ("SELECT * FROM packs;");
                $resultPack = mysqli_query($conn, $sqlPack);
                $sqlClass = ("SELECT * FROM classes;");
                $resultClass = mysqli_query($conn, $sqlClass);
                echo '<input required name="write-price" type="text" style="margin-bottom: 20px;" placeholder="Цена">';
                echo '<select name="select-pack-id" id="pc-select" class="table-change-select" style="margin-bottom: 20px; cursor: pointer; width: 440px;">';
                while ($row = mysqli_fetch_assoc($resultPack)) {
                    echo '<option value="' . $row['id_pack'] . '">' . $row['id_pack'] . ' - ' . $row['name'] . '</option>';
                }
                echo '</select>';
                echo '<select name="select-class-id" id="pc-select" class="table-change-select" style="margin-bottom: 20px; cursor: pointer; width: 440px;">';
                while ($row = mysqli_fetch_assoc($resultClass)) {
                    echo '<option value="' . $row['id_class'] . '">' . $row['id_class'] . ' - ' . $row['class_name'] . '</option>';
                }
                echo '</select>';
                break;
            case 'users':
                $sqlRole = ("SELECT * FROM roles;");
                $resultRole = mysqli_query($conn, $sqlRole);
                echo '<input required name="write-surname" type="text" style="margin-bottom: 20px;" placeholder="Фамилия">';
                echo '<input required name="write-name" type="text" style="margin-bottom: 20px;" placeholder="Имя">';
                echo '<input required name="write-email" type="text" style="margin-bottom: 20px;" placeholder="Почта">';
                echo '<input required name="write-phone" type="text" style="margin-bottom: 20px;" placeholder="Телефон">';
                echo '<input required name="write-login" type="text" style="margin-bottom: 20px;" placeholder="Логин">';
                echo '<input required name="write-password" type="text" style="margin-bottom: 20px;" placeholder="Пароль">';
                echo '<select name="select-role-id" id="pc-select" class="table-change-select" style="margin-bottom: 20px; cursor: pointer; width: 440px;">';
                while ($row = mysqli_fetch_assoc($resultRole)) {
                    echo '<option value="' . $row['id_role'] . '">' . $row['id_role'] . ' - ' . $row['name'] . '</option>';
                }
                echo '</select>';
                break;
        }
    }
?>