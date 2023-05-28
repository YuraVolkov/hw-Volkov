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
    <div class="header">
        <h1>Моя страница</h1>
        <div class="data"><?php include_once 'php/data.php';?></div>
        <div class="wordCount"><?php include_once 'wordCount.php';?></div>
        <div class="authorization"><a href="php/authorization.php">авторизация</a></div>
    </div>
    <?php include_once 'php/content.php';?>
    <?php include_once 'php/container.php';?>
    <?php include_once 'php/container_2.php';?>
</body>
</html>