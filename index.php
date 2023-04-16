<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $date = new DateTime('NOW');
    $hour = $date->format('G');
    if ( ($hour > 10) && ($hour < 22) ) {
        include 'php/light_theme.php';
    } else {
        include 'php/dark_theme.php';
    }
    ?>
    <title>Моя страница</title>
</head>
<body>
    <?php include_once 'php/header.php';?>
    <?php include_once 'php/content.php';?>
    <?php include_once 'php/container.php';?>
    <?php include_once 'php/container_2.php';?>
</body>
</html>