<?php 
    include "config.php";
    $sql = "SELECT * FROM tariffs JOIN packs ON tariffs.id_pack = packs.id_pack;"; //Запрос на получение данных о тарифах и соответствующих пакетов
    $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { //Вывод option в select со всеми пакетами и соответствующими им тарифами
                echo '<option value="' . $row['id_tariff'] . '">' . $row['pack_name'] . '</option>';
            }
        }
?>