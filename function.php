<?php

/*function hello($name, $age){
    //$name = "Tom";
    echo "hello, $name age = $age";
}
hello("Tom", 12);
hello("Kate", 10);

function printAB(&$a){
    $a += 5;
    echo $a . "<br>";
}
$a = 10;
echo $a . "<br>";
printAB($a);
echo $a;

function f($x){
    return $x *= $x;
}

$a = f(10);
$b = f($a);
echo $b;

$name = function (){
    echo "Hello world";
};
$name();

echo "<pre>";
print_r($arr);
echo "</pre>";

function f2($x){
    if($x <= 5){
        echo $x;
        f2($x+1);
    }
}
f2(1);*/

//задача 1

function task1(){
    $a = mt_rand(0,10);
    $b = mt_rand(0,10);
    echo "a = $a b = $b" . "<br>";
    if($a<$b){
        return $b;
    }else{
        return $a;
    }
}
$c = task1();
echo $c;
echo "<br>";

//задача 2

function task2($a, $b){
    return sqrt($a *= $a + $b *= $b);
}
$c = task2(2, 5);
echo $c;
echo "<br>";

//задача 3

function task3($a = 10){
    for($i = 0; $a < 1000000; $i++){
        $a = $a * 10;
        echo $a . " ";
    }
    echo "Вы достигли предела";
}
task3(10);
echo "<br>";

//задача 4

function task4(){
    $arr = [];
    for($i = 0; $i < 20; $i++){
        $arr[$i] = mt_rand(0,20);
        echo $arr[$i] . " ";
    }
}
echo task4();

//задача 5

