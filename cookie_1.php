<?php
print_r($_GET);
$t = $_GET['name'];
setcookie('name', $t, time()+3600);
print_r($_COOKIE);
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
    <h1>Hello<?echo " " . $_COOKIE['name'];?></h1>
</body>
</html>