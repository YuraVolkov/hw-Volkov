<?php
session_start();
require 'OOP.php';
$database = new registration("localhost", "Yura", 123, "People");
$selectArray = $database->selectUsers();
$foundUser = false;
foreach($selectArray as $user){
    if($user['user_login'] == $_POST['login'] && $user['user_password'] == md5($_POST['password'])){
        echo "Привет " . $_POST['login'];
        $foundUser = true;
        break;
    }
}
    if(!$foundUser){
        echo 'Неправильный логин или пароль';
}
?>