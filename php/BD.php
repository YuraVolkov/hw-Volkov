<?php
$hostname = "localhost";
$username = "Yura";
$password = 123;
$dbname = "People";
$connect = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($connect, 'utf8');
if (!$connect) {
    die("Соединение не установлено " . mysqli_connect_error());
}
$sql = "CREATE TABLE Users (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
)";
if (mysqli_query($connect,$sql)) {
    echo "Таблица успешно создана";
} else {
    echo "Ошибка создания таблицы: " . mysqli_error($connect);
}
mysqli_close($connect);
?>