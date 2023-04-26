<?php
$v = 0;
if(isset($_COOKIE['login'])){
    $v = $_COOKIE['login'];
    $v = (int)$v;
    $v++;
}
setcookie('login', $v, time()+3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie task 3</title>
</head>
<body>
    <form>
        <label>Логин:</label>
        <input type="text" name="login" required="required">
    </form>
    <p>Вы посетили наш сайт <?php echo $v; ?> раз!</p>
</body>
</html>