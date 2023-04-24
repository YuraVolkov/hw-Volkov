<?php
print_r($_POST);
$mail = "OSPanel\userdata\temp\email";
$header = "логин и комментарий";
$message = "Логин: ".$_POST['login']."Комментарии: ".$_POST['comment'];
mail($mail, $header, $message);
?>