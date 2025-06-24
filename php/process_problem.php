<?php
    if (isset($_POST['post_problem'])) {
        //Переменные с данными из формы и для отправки письма
        $to = "isip_a.a.perunov@mpt.ru";
        $subject = "Форма обратной связи CyberNest";
        $message = $_POST['problem'];
        $headers = "From: " . $_POST['email'] . "\r\n";
        $result = mail($to, $subject, $message, $headers); //Отправление сообщения с записанными данными

        if ($result) { //Сообщения о статусе отправления
            $answer = "Выше письмо отправлено";
        } else {
            $answer = "Ошибка отправки";
        }
    }
?>