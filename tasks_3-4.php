<?php

echo "Урок 3-4 задачи <br>";

echo "Слайд 23 задача 1 <br>";
for($i=1; $i<31; $i++){
    if($i % 2 == 0){
    echo $i . '<br>';
    }
}

echo "Слайд 23 задача 2 <br>";
for($i=1; $i<51; $i++){
    if($i % 3 == 0 and $i % 5 == 0)
        echo '<b>' . $i . '</b>' . ' ';
    elseif($i % 3 == 0)
        echo '<i>' . $i . '</i>' . ' ';  
}
echo "<br>";

echo "Слайд 23 задача 3 <br>";
$a = 1;
$b = 1;
$count = 0;
$mul = 0;
do {
    $mul = $mul + $a/$b;
    $pi = 4 * $mul;
    $a = -1 * $a;
    $b += 2;
    $count++;
} while (round($pi, 2) != 3.14);
echo $count;
echo "<br>";

echo "Слайд 23 задача 4 <br>";
$a = 1;
$b = 1;
$c = 1;
for($i = 0;$c < 10;){
    $a += ($a + 3);
    $b += ($b + 1);
    $c += ($a / $b);
    ++$i;
}
echo $i;
echo "<br>";

echo "Слайд 24 задача 1 <br>";
$K = 1234567898;
$sum = 0;
do{$i = $K % 10;
    if($i % 2 == 0){
        $K = $K / 10;
        $sum = $sum + $i;
    }else{$K = $K / 10;}
} while ($i > 0);
echo $sum;
echo "<br>";

echo "Слайд 24 задача 2 <br>";
$K = 957;
echo $K;
echo "<br>";
$sum = array();
for($i = 0; $K != 0; $i++){
    $sum[$i] = $K % 10;
    $K = (int)($K / 10);
}
print_r($sum);
echo "<br>";
$f = 0;
for($b = 0; $b < $i - 1; $b++){
    for($j = 0; $j < $i - $b - 1; $j++){
        if($sum[$j]>$sum[$j+1]){
          $f = $sum[$j];
          $sum[$j] = $sum[$j+1];
          $sum[$j+1] = $f;
        }
    }
}
print_r($sum);
echo "<br>";

echo "Слайд 24 задача 3 <br>";
$K = 951584667;
echo $K;
echo "<br>";
$sum = array();
for($i = 0; $K != 0; $i++){
    $sum[$i] = $K % 10;
    $K = (int)($K / 10);
}
echo arsort($sum);
print_r($sum);