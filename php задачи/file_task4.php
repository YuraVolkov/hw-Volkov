<?php
$str_2 = file_get_contents('text_2.txt');
$array_str_2 = explode('.', $str_2);
//print_r($array_str_2);
echo '<br>';
$str_3 = file_get_contents('text_3.txt');
$array_str_3 = explode('.', $str_3);
//print_r($array_str_3);
file_put_contents('text_4.txt', $array_str_2);
?>