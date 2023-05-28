<?php
$login = $_GET['login'];
setcookie('login', date('H:i:s'), time()+3600);
$time = $_COOKIE['login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie task 2</title>
</head>
<body>
    <form>
        <label>Логин:</label>
        <input type="text" name="login" required="required">
    </form>
    <p>Последний раз <?php echo $login ?> заходил <?php echo $time; ?></p>
</body>
</html>