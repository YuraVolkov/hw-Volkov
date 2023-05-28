<?php
$p = $_POST["password"];
$_POST["password"] = md5($p);
print_r($_POST);
echo $_POST["login"];
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
<form action="" method="post">
    <input type="login" name="login">
    <input type="password" name="password">
    <button type="submit"></bytton>
</form>
</body>
</html>