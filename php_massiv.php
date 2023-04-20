<?php

echo "Урок 5-6 задачи <br>";

echo "Слайд 15 задача 1 <br>";
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

echo "Слайд 15 задача 2 <br>";

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

echo "Слайд 15 задача 3 <br>";
$images = ['bird.png', 'hamster.png', 'ladybug.png',];
$v = mt_rand(0,2);
echo $images[$v]."<br>";
echo '<img src=' . $images[$v] . '>';
echo '<br>';

echo "Слайд 15 задача 4 <br>";
$N = 10;
$arr3 = [];
for($i = 0; $i < $N; $i++){
    $arr3[$i] = mt_rand(-100,100);
    echo $arr3[$i] . " ";
}
echo '<br>';
$min = 0;
$max = 0;
foreach($arr3 as $value){
    if($value>$max){
        $max = $value;
    }
    if($value<$min){
        $min = $value;
    }
}
foreach($arr3 as $value){
    if($value<0){
        if($value>$min){
            $min = $value;
        }else{
            $min = $min;
        }
    }elseif($value == 0){
        $max = $max;
    }else{
        if($value<$max){
            $max = $value;
        }
    }
}
echo "Минимальное положительное число $max";
echo '<br>';
echo "Максимальное отрицательное число $min";
echo '<br>';

echo "Урок 7-8 Строки";
echo '<br>';

echo "Слайд 22 задача 1";
echo '<br>';
$fact = "fact";
$arr6 = str_split($fact);
print_r($arr6);
echo '<br>';
echo strtoupper($arr6[0]) . ($arr6[1]) . ($arr6[2]) . ($arr6[3]);
$fact2 = implode(' ', $arr6);
echo '<br>';

echo "Слайд 22 задача 2";
echo '<br>';
$fio = "Волков, Юрий, Александрович";
$arr7 = explode(", ", $fio);
print_r($arr7[1] . " " . $arr7[0]);
echo '<br>';

echo "Слайд 22 задача 3";
echo '<br>';
$hello = "Привет, мир";
$arr8 = mb_str_split($hello);
print_r($arr8);
echo '<br>';
echo mb_strlen($hello);
echo '<br>';
$sum = 0;
for($i = 0; $i < count($arr8) - 1; $i++){
    if($arr8[$i] == "и")
    $sum++;
}
echo $sum;
echo '<br>';

echo "Слайд 22 задача 4";
echo '<br>';
$str1 = "html css php";
$arr9 = explode(" ", $str1);
print_r($arr9);
echo '<br>';
foreach($arr9 as $item){
    echo $item . '<br>';
}

echo "Слайд 22 задача 5";
echo '<br>';
$str2 = "123.png";
$arr10 = str_split($str2);
print_r($arr10);
echo '<br>';
if(substr($str2, -4, 4) == ".png"){
    echo "да";
}else{
    echo "нет";
}
echo '<br>';

echo "Урок 5-6 слайд 17 задача 8";
echo '<br>';
$arr11 = [
    ["ананас","банан","яблоко","абрикос"],
    ["помидор","огурец"],
    ["чай","кофе","вода"]
];
print_r($arr11);
echo '<br>';
foreach($arr11 as $value){
    foreach($value as $item){
        if(mb_substr($item, 0, 1) == "а")
        echo $item." ";
    }
}
echo '<br>';

echo "Урок 5-6 слайд 17 задача 9";
$arr12 = [[3,8,11],[4,20,1,4],[8,9,10,6,12]];
echo '<br>';
echo count($arr12, COUNT_RECURSIVE);
echo '<br>';
foreach($arr12 as $item){
    echo count($item)." ";
}