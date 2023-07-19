<?php
    $date = new DateTime('NOW');
    $hour = $date->format('G');
    if ( ($hour > 10) && ($hour < 22) ) {
        include 'php/light_theme.php';
    } else {
        include 'php/dark_theme.php';
    }
    ?>