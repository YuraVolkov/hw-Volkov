<?php
require 'OOP.php';
$database = new registration("localhost", "Yura", 123, "People");
if(isset($_POST['submit'])){
    $err = [];
    if(count($err) == 0)
    {
        $database->user($_POST['login'], $_POST['password']);
        header("Location: authorization.php");
        exit();
    }
    else
    {
        echo "При регистрации произошла ошибка";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/form_authorization.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="one">
        <form method="post">
            <fieldset class="registration">
                <legend>Регистрация</legend>

                <div>
                    <label for="login">Логин:</label>
                    <input type="text" name="login" id="login" required="required">
                </div>
                <div>
                    <label for="password">Пароль:</label>
                    <input type="password" name="password" id="password" required="required">
                </div>
                <div class="submit">
                    <label for="authorization"></label>
                    <input type="submit" name="submit" value="Зарегистрироваться" id="authorization">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>