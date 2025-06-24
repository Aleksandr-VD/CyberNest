<?php
    if (isset($_POST['post_reg'])) {
        // Переменные с данными из формы регистрации
        $surname = $_POST['surname'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $doublePassword = $_POST['double_password'];
        $namePattern = '/^[\p{L}\s\'\-]+$/u'; //Допустимые символы для фамилии и имени
        $pattern = '/^[a-zA-Z0-9_-]{1,20}$/'; //Допустимые символы для отсальных полей
        if (preg_match($namePattern, $surname)) { //Проверка корректности символов в поле фамилии
            if (preg_match($namePattern, $name)) {//Проверка корректности символов в поле имени
                if (preg_match($pattern, $login)) {//Проверка корректности символов в поле логина
                    if (preg_match($pattern, $password)) {//Проверка корректности символов в поле пароля
                        if (preg_match($pattern, $doublePassword)) {//Проверка корректности символов в поле подтверждения пароля
                            //Запрос на добавление данных в БД
                            $sql = "INSERT INTO users (surname, name, email, phone, login, password, id_role) VALUES ('$surname', '$name', '$email', '$phone', '$login', '$password', '1')";
                            //Запрос на получение введенного логина для проверки его уникальности
                            $uniqueUserCheck = ("SELECT * FROM users WHERE login = '$login';");
                            $resultCheck = mysqli_query($conn, $uniqueUserCheck);
                            if ($password == $doublePassword) { //Проверка на совпадение паролей в полях
                                if (mysqli_num_rows($resultCheck) == 0) { //Проверка на уникальность логина
                                    if (mysqli_query($conn, $sql)) { //Выполнение запроса на добавление данных в БД
                                        header("Location: auth.php"); //Редирект на страницу авторизации
                                    }
                                    else {
                                        $exception = "Ошибка регистрации, попробуйте позже";
                                    }
                                } 
                                else {
                                    $exception = "Пользователь с таким логином уже существует";
                                }
                            }
                            else {
                                $exception = "Ваши пароли не совпадают";
                            }
                        } else {
                            $exception = 'Поле "Подтверждение пароля" содержит недопустимые символы';
                        }
                    } else {
                        $exception = 'Поле "Пароль" содержит недопустимые символы';
                    }
                } else {
                    $exception = 'Поле "Логин" содержит недопустимые символы';
                }
            } else {
                $exception = 'Поле "Имя" содержит недопустимые символы';
            }
        } else {
            $exception = 'Поле "Фамилия" содержит недопустимые символы';  
        }
    }
?>