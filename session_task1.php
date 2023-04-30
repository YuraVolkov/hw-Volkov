<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session task 1</title>
</head>
<body>
    <form action="hello.php">
        <label>Имя пользователя:</label>
        <input type="text" name="login">
        <input type="submit">
    </form>
</body>
</html>