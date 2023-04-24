<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/form_authorization.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="one">
        <form action="Hello_user.php" method="post">
            <fieldset>
                <legend>Авторизация</legend>
                <div>
                    <label for="login">Логин:</label>
                    <input type="text" name="login" id="login" required="required">
                </div>
                <div>
                    <label for="password">Пароль:</label>
                    <input type="password" name="password" id="password" required="required">
                </div>
                <div class="submit">
                    <label></label>
                    <button type="submit">Авторизоваться</button>
                </div>
            </fieldset>
        </form>
    </div>
    <!--<?php
        print_r($_POST);
        $login = $_POST['login'];
        $password = $_POST['password'];
        echo $login;
        echo $password;
    ?>-->
</body>
</html>