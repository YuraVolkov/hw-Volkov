<?php
if (!empty($_GET)) {
    $_SESSION['num1'] = $_GET['num1'];
    $_SESSION['num2'] = $_GET['num2'];
}

/*session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1; // первый заход на страницу
} else {
    $_SESSION['counter']++;   // последующие заходы
}
echo $_SESSION['counter'];

session_start();
$_SESSION['test'] = '25';
$_SESSION['test_2'] = '10';*/
?>