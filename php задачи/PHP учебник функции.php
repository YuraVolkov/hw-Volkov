<?php
function func($a = 5){
    echo $a * 2;
}
$c = 8;
func(4);
echo '<br';

function funcs($num) {
    return $num;
    
    $res = $num * $num;
    return $res;
}

$v = funcs(4);
echo $v;
?>