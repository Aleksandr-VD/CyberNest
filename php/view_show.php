<?php
    include "config.php";
    if (isset($_POST['view-select'])) {
        $viewName = htmlspecialchars($_POST['view-select']); //Переменная с выбранным представлением
        $sql = ("SELECT * FROM $viewName;"); //Запрос на получение выбранного представления
        $result = mysqli_query($conn, $sql);
        echo '<table class="admin-table">';
        switch ($viewName) { //Вывод разной html разметки в зависимости от выбранного представления
            case 'view1':
                echo '<tr><th>id</th><th>Тип</th><th>CPU</th><th>GPU</th><th>RAM</th><th>SSD</th><th>OS</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) { //Вывод всех данных из представления в таблицу
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
            case 'view2':
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
            case 'view3':
                echo '<tr><th>id</th><th>Название</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_game'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['name'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'view4':
                echo '<tr><th>id</th><th>Название</th><th>Тип</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_place'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['name'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['type'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'view5':
                echo '<tr><th>id</th><th>Название</th><th>Класс</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_user'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['name'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['class_name'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'view6':
                echo '<tr><th>Название</th><th>Количество</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['name'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['COUNT(*)'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'view7':
                echo '<tr><th>Название</th><th>Занято</th><th>Тип</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['name'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['busy'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['type'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'view8':
                echo '<tr><th>Тип</th><th>Количество</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['type'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['COUNT(*)'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'view9':
                echo '<tr><th>Логин</th><th>Время</th><th>Название</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['login'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['time'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['name'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
            case 'view10':
                echo '<tr><th>id</th><th>Количество</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><h3 class="light-text">' . $row['id_tariff'] . '</h3></td>';
                    echo '<td><h3 class="light-text">' . $row['COUNT(*)'] . '</h3></td>';
                    echo '</tr>';
                }
                break;
        }
        echo '</table>';
    }
?>