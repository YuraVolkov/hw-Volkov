<?php
$hostname = "localhost";
$username = "Yura";
$password = 123;
$dbname = "People";
$connect = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($connect, 'utf8');
$result = mysqli_query($connect, "SELECT user_login, user_password FROM users");
$selectArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
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