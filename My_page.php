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
    <div class="content">
        <div class="one">  
            <img src="images/foto_1.jpg" alt = "Моё фото" class="foto">
        </div>
        <div class="two">
            <div class="name">Волков Юра</div>
            <div class="info">Работаю на комбинате горновым, в доменном цехе, хочу перейти работать в IT, прошел несколько небольших курсов по верстке и работе в Figma</div>
            <div class="classes">На занятиях все нравится, только из за работы не успеваю делать домашку))</div>
        </div>
    </div>
    <div class="container">
        <div class="container_2">
            <div class="images"><img src="images/тигры.jpg" alt = "Тигры" height="180"></div>
            <div class="text">Тигры</div>
        </div>
        <div class="container_2">
            <div class="images"><img src="images/Медведь.jfif" alt = "Медведь" height="180"></div>
            <div class="text">Медведь</div>
        </div>
        <div class="container_2">
            <div class="images"><img src="images/Лев.jfif" alt = "Лев" height="180"></div>
            <div class="text">Лев</div>
        </div>
        <div class="container_2">
            <div class="images"><img src="images/Леопард.jfif" alt = "Леопард" height="180"></div>
            <div class="text">Леопард</div>
        </div>
    </div>
    <div class="grid">
        <div class="container_2">
            <div class="images"><img src="images/Крокодил.jfif" alt = "Крокодил" height="180"></div>
            <div class="text">Крокодил</div>
        </div>
        <div class="container_2">
            <div class="images"><img src="images/Жирафы.jfif" alt = "Жирафы" height="180"></div>
            <div class="text">Жирафы</div>
        </div>
        <div class="container_2">
            <div class="images"><img src="images/Лошадь.jfif" alt = "Лошадь" height="180"></div>
            <div class="text">Лошадь</div>
        </div>
        <div class="container_2">
            <div class="images"><img src="images/Волк.jfif" alt = "Волк" height="180"></div>
            <div class="text">Волк</div>
        </div>
    </div>
</body>
</html>