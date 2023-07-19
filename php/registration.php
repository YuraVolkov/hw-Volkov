<?php
$hostname = "localhost";
$username = "Yura";
$password = 123;
$dbname = "People";
$connect = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($connect, 'utf8');
if(isset($_POST['submit'])){
    $err = [];
    if(count($err) == 0)
    {
        $login = $_POST['login'];
        $password = md5(trim($_POST['password']));
        mysqli_query($connect,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
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