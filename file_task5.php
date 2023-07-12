<?php
$str_6 = file_get_contents('text_6.txt');
$array_str_6 = explode('.', $str_6);
print_r($array_str_6);
echo '<br>';
$str_5 = file_get_contents('text_5.txt');
$array_str_5 = explode('.', $str_5);
print_r($array_str_5);
$array_new = array_intersect($array_str_6, $array_str_5);
echo '<br>';
print_r($array_new);
$file = implode('.', $array_new);
file_put_contents('text_7.txt', $file);
?>