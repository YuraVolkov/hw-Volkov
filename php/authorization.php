<?php
session_start();
?> 
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
                    <button type="submit" value="Войти">Авторизоваться</button>
                </div>
                <div class="links">
                    <div class="link">
                        <a href="fact.php">Факт</a>
                    </div>
                    <div class="link">
                        <a href="bitrix.php">Битрикс24</a>
                    </div>
                </div>    
            </fieldset>
        </form>
    </div>
</body>
</html>