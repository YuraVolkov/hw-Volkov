<?php
function staining_2($str){
$arr = explode(" ", trim($str));
foreach($arr as $key => $value){
    if($key % 2 == 0){
        $arr2[] = '<span style = "color: blue">' . $value . " " . '</span>';
    }else{
        $arr2[] = '<span style = "color: yellow">' . $value . " " . '</span>';
    }
}
$V = implode(" ", $arr2);
echo $V;
}
$str = "На занятиях все нравится, только из за работы не успеваю делать домашку";
staining_2($str);
?>