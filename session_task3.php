<?php
session_start();
if(isset($_SESSION['time'])){
    $time_diff = time() - $_SESSION['time'];
}else{
$_SESSION['time'] = time();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session task 3</title>
</head>
<body>
    <h1>Пользователь заходил на сайт <?echo $time_diff;?> секунд назад</h1>
</body>
</html>