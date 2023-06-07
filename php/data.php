<?php
function dayCount($birthday){
$today = date('d.m.y');
echo "Дата рождения" . " " . $birthday . '<br>';
echo "Сегодня" . " " . $today . '<br>';
echo "Количество дней между датами" . " " . $date = date_diff(new DateTime($birthday), new DateTime($today))->days;
}
$birthday = '23.05.1990';
dayCount($birthday);
?>