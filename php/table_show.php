<?php
    include "config.php";
    if (isset($_POST['table-select'])) {
        //Переменная с выбранной таблицей 
        $tableName = htmlspecialchars($_POST['table-select']);
        //Запись в сессию выбранной таблицы
        $_SESSION['table-name'] = $tableName;
        $sql = ("SELECT * FROM $tableName;"); //Запрос на получение данных из выбранной таблицы
        $result = mysqli_query($conn, $sql);
        echo '<table class="admin-table">';
        switch ($tableName) { //Вывод разной html разметки в зависимости от выбранной таблицы
            case 'classes':
                echo '<tr><th>id</th><th>Название</th><th>Устройство</th></tr>'; //Вывод названий столбцов
                while ($row = mysqli_fetch_assoc($result)) { //Вывод всех записей в выбранной таблице
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_class'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['class_name'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['id_device'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'devices':
                echo '<tr><th>id</th><th>Тип</th><th>CPU</th><th>GPU</th><th>RAM</th><th>SSD</th><th>OS</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_device'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['type'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['CPU'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['GPU'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['RAM'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['SSD'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['OS'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'games':
                echo '<tr><th>id</th><th>Название</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_game'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['name'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'packs':
                echo '<tr><th>id</th><th>Название</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_pack'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['name'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'places':
                echo '<tr><th>id</th><th>Название</th><th>Занято</th><th>Класс</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_place'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['name'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['busy'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['id_class'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'roles':
                echo '<tr><th>id</th><th>Название</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_role'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['name'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'sessions':
                echo '<tr><th>id</th><th>Время</th><th>Пользователь</th><th>Тариф</th><th>Место</th><th>Игра</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_session'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['time'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['id_user'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['id_tariff'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['id_place'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['id_game'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'tariffs':
                echo '<tr><th>id</th><th>Цена</th><th>Пакет</th><th>Класс</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_tariff'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['price'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['id_pack'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['id_class'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'users':
                echo '<tr><th>id</th><th>Фамилия</th><th>Имя</th><th>Почта</th><th>Телефон</th><th>Логин</th><th>Пароль</th><th>Роль</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_user'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['surname'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['name'] . '</h3></td>';
                    echo '<td style="word-wrap: break-word;"><h3 class="light-text">' . $row['email'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['phone'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['login'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['password'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['id_role'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
        }
        echo '</table>';
    }
?>