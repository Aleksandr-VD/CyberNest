<?php 
    include "config.php";
    $sql = "SELECT * FROM places JOIN classes ON places.id_class = classes.id_class WHERE places.busy = 0;"; //Получение из БД всех свободных мест
    $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { //Вывод option  в select со всеми свободрыми местами
                echo '<option value="' . $row['id_place'] . '">' . $row['name'] . ' (' . $row['class_name'] . ')' . '</option>';
            }
        }
?>