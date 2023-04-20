<?php
$str = "Работаю на комбинате горновым, в доменном цехе, хочу перейти работать в IT, прошел несколько небольших курсов по верстке и работе в Figma";
$arr = explode(" ", trim($str));
foreach($arr as $key => $value){
    if($key == 0 || $key == 1 || $key == 2 || $key == 3){
        echo '<span style = "color: red">' . $value . " " . '</span>';
    }else{
        $arr1[] = $value;
    }
}
$F = implode(" ", $arr1);
echo " " . $F;
?>