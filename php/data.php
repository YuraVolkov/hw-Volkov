<?php
$birthday = '23.05.1990';
$today = date('d.m.y');
echo "Дата рождения" . " " . $birthday . '<br>';
echo "Сегодня" . " " . $today . '<br>';
echo "Количество дней между датами" . " " . $date = date_diff(new DateTime($birthday), new DateTime($today))->days;
?>