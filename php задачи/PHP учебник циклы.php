<?php
/*$arr = ['апельсин', 'помидор', 'огурец', 'яблоко'];
print_r($arr);
echo '<br>';
foreach($arr as $value){
    echo $value . '<br>';
}
echo '<br>';

$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		echo $elem . '<br>';
	}
echo '<br>';

$arr = ['a', 'b', 'c', 'd', 'e'];
foreach($arr as $element){
    echo $element . '<br>';
}
echo '<br>';

$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		echo $elem * $elem . '<br>';
	}
echo '<br>';

$arr = [1, 2, 3, 4, 5];
$res = 0;
	
	foreach ($arr as $elem) {
		$res += $elem;
	}
	
	echo $res;
echo '<br>';

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = 0;
foreach($arr as $item){
    $result += $item;
}
echo $result;
echo '<br>';
echo $result/count($arr);
echo '<br>';

$arr = [0=>'a',1=>'b', 2=>'c', 3=>'d'];
foreach($arr as $key=>$value){
    echo $key . '=>' . $value . '<br>';
}
echo '<br>';

$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
foreach($arr as $key=>$value){
    echo $key . '-' . $value . '<br>';
}
echo '<br>';

$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
foreach($arr as $key=>$value){
    echo $key . '-' . 'возраст ' . $value . 'лет' . '<br>';
}
echo '<br>';

$i = 11;
while($i<=33){
    echo $i . ' ';
    $i++;
}
echo '<br>';

$i = 0;
while($i<=100){
    echo $i.' ';
    $i += 2;
}
echo '<br>';

for($i=11; $i<=33; $i++){
    echo $i . '<br>';
}
echo '<br>';

for ($i = 0, $j = 0; $i <= 9; $i++, $j += 2) {
    echo $i . ' ' . $j . '<br>';
}
echo '<br>';

$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem == 3) {
			echo 'есть';
			break; // выйдем из цикла
		}
	}
echo '<br>';

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	
	foreach ($arr as $elem) {
		if ($elem % 2 === 0) {
			$res = $elem * $elem;
		} elseif ($elem % 3 === 0) {
			$res = $elem * $elem * $elem;
		} else {
			continue; // перейдем на новую итерацию цикла
		}
		
		echo $res . '<br>'; // выполнится, если делится на 2 или 3
	}
echo '<br>';

$arr = [1, 2, 3, 4, 3, 5];
	
	foreach ($arr as $elem) {
		if ($elem === 3) {
			echo 'есть' . ' ';
            break;
		} else {
            echo 'нет' . ' ';
        }
	}
echo '<br>';

$num = 10;
while($num < 1000){
    $num = $num * 3;
}
echo $num;
echo '<br>';

$num = 500;
	
	while ($num > 10) {
		$num = $num / 2;
	}
	
	echo $num;
echo '<br>';


for($num = 10; $num <= 1000; $num *= 3){
    echo $num;
}
echo '<br>';*/

$arr = [];
for($i = 0; $i <= 5; $i++){
    $arr[] = $i;
}
var_dump($arr);
echo '<br>';

$arr = [1, 2, 3, 4, 5];
	
	for ($i = 1; $i < count($arr); $i++) {
		echo $arr[$i];
	}
?>