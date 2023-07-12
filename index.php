<?php
if (isset($_POST['color'])) {
    $selectedColor = $_POST['color'];
    setcookie('selectedColor', $selectedColor, time() + 3600);
} else {
    $selectedColor = $_COOKIE['selectedColor'];
}
if ($selectedColor) {
    $backgroundColor = $selectedColor;
} else {
    $backgroundColor = '';
}?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Styles/styles_light_theme.css">
    <title>Моя страница</title>
    <style>
        .header{
            background-color: <?php echo $backgroundColor; ?>;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Моя страница</h1>
        <div class="data"><?php include_once 'php/data.php';?></div>
        <div class="wordCount"><?php include_once 'wordCount.php';?></div>
        <div class="form">
            <form method="post">
                <select name="color">
                    <option value="darkviolet" <?php if ($selectedColor == 'darkviolet"') echo 'selected'; ?>>Фиолетовый</option>
                    <option value="cornflowerblue" <?php if ($selectedColor == 'cornflowerblue') echo 'selected'; ?>>Синий</option>
                    <option value="aqua" <?php if ($selectedColor == 'aqua') echo 'selected'; ?>>Аква</option>
                </select>
                <button type="submit">Применить</button>
            </form>
        </div>
        <div class="authorization"><a href="php/authorization.php">авторизация</a></div>
    </div>
    <?php include_once 'php/content.php';?>
    <?php include_once 'php/container.php';?>
    <?php include_once 'php/container_2.php';?>
</body>
</html>