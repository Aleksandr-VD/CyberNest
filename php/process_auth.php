<?php
    if (isset($_POST['post_auth'])) { //Обработка формы авторизации
        //Запись логина и пароля в переменные
        $login = $_POST['login'];
        $password = $_POST['password'];
        $pattern = '/^[a-zA-Z0-9_-]{1,20}$/'; //Набор допустимых вводимых символов
        if (preg_match($pattern, $login) && preg_match($pattern, $password)) {  //Проверка на ввод допустимых символов
            $sql = ("SELECT * FROM users WHERE login = '$login' AND password = '$password';"); //Получение из БД записи с введенными логином и паролем
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) { //Проверка на наличие введенных логина и пароля
                $row = mysqli_fetch_assoc($result); //Вывод результата запроса в виде ассоциативного массива
                //Запись в сессию переменных id пользователя и его роли, а также логина
                $_SESSION['id_user'] = $row['id_user']; 
                $_SESSION['id_role'] = $row['id_role'];
                $_SESSION['login'] = $login;
                //Редирект на страинцы личного кабинета или панели администратора в зависимости от роли
                if ($_SESSION['id_role'] == 1) {
                    header("location: account.php");
                }
                if ($_SESSION['id_role'] == 2) {
                    header("location: admin.php");
                }
                die;
            } 
            else {
                $exception = "Неверные логин или пароль";
            }
        } else {  
            $exception = "Одна из строк содержит недопустимые символы";  
        }  
    }
?>