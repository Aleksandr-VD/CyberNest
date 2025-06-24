<?php
    include "config.php"; //Подключение к БД
    if (isset($_POST['table-select'])) {
        $tableName = htmlspecialchars($_POST['table-select']); //Запись в переменную выбранной таблицы
        $sql = ("SELECT * FROM $tableName;"); //Запрос на получение всех данных из выбранной таблицы
        $result = mysqli_query($conn, $sql);
        switch ($tableName) { //Выполнение условий в зависимости от выбранной таблицы
            case 'classes':
                while ($row = mysqli_fetch_assoc($result)) { //Вывод тега option в select со всеми id из выбранной таблицы
                    echo '<option value="' . $row['id_class'] . '">' . $row['id_class'] . '</option>';
                }
                break;
            case 'devices':
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id_device'] . '">' . $row['id_device'] . '</option>';
                }
                break;
            case 'games':
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id_game'] . '">' . $row['id_game'] . '</option>';
                }
                break;
            case 'packs':
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id_pack'] . '">' . $row['id_pack'] . '</option>';
                }
                break;
            case 'places':
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id_place'] . '">' . $row['id_place'] . '</option>';
                }
                break;
            case 'roles':
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id_role'] . '">' . $row['id_role'] . '</option>';
                }
                break;
            case 'sessions':
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id_session'] . '">' . $row['id_session'] . '</option>';
                }
                break;
            case 'tariffs':
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id_tariff'] . '">' . $row['id_tariff'] . '</option>';
                }
                break;
            case 'users':
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id_user'] . '">' . $row['id_user'] . '</option>';
                }
                break;
        }
    }
?>