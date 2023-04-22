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