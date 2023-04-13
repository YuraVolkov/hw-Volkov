<?php

//Слайд 15 задача 1

$j = 50;
$arr = [];
for($i = 0; $i < 5; $i++){
    $arr[$i] = $j - $i * 5;
    echo $arr[$i] . " ";
}

$result = 0;
for($i = 0; $i < 5; $i++){
    $result += $arr[$i];
}
echo '<br>';
echo $result;
echo '<br>';

//Сдайд 15 задача 2

$arr2 = [];
for($i = 0; $i < 5; $i++){
    $arr2[$i] = mt_rand(0,20);
    echo $arr2[$i] . " ";
}
echo "reverse" . '<br>';
for($i = count($arr2)-1; $i >= 0; $i--){
    echo $arr2[$i] . " ";
}
echo '<br>';

//Слайд 15 задача 3   не получается подключить картинки

$images = ['bird.png', 'hamster.png', 'ladybug.png',];
$v = mt_rand(0,2);
echo $images[$v];
echo '<br>';

//Слайд 15 задача 4   не получается вывести нужные числа, выводятся максимальное и минимальное

$arr3 = [];
for($i = 0; $i < 5; $i++){
    $arr3[$i] = mt_rand(-100,100);
    echo $arr3[$i] . " ";
}
echo '<br>';
if($arr3 > 0){
    echo min($arr3);
    echo '<br>';
    echo max($arr3);
}