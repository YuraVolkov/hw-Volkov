<?php
//print_r($_GET);
$tmp = $_GET['task2'];
//echo $tmp;
setcookie('task2', $tmp, time()+3600);
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
    <form action="result.php">
        <label for="login">Сколько будет 10 - 2 ?</label>
        <input type="text" name="task3" id="login" required="required">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>