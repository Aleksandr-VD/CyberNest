<?php 
    include "config.php";
    //Запрос на получение данных о времени и местах сеансов пользователя, сохраненного в сессии
    $sql = "SELECT time, name FROM sessions JOIN places ON sessions.id_place = places.id_place WHERE sessions.id_user = " . $_SESSION['id_user'] . ";";
    $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) { //Проверка на наличие сеансов
            while ($row = mysqli_fetch_assoc($result)) { //Вывод всех сеансов пользователя на страницу
                echo '<div class="session">
                        <h3 class="dark-text">' . $row['time'] . ' - ' . $row['name'] . '</h3>
                    </div>';
            }
        } 
        else {
            echo '<h2 class="blue-text">У вас нет ни одного сеанса</h2>'; //Вывод сообщения об отсутствии сеансов
        }
?>