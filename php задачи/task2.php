<?php
//print_r($_GET);
$tmp = $_GET['task1'];
//echo $tmp;
setcookie('task1', $tmp, time()+3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task3.php">
        <label for="login">Сколько будет 3 * 3 ?</label>
        <input type="text" name="task2" id="login" required="required">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>