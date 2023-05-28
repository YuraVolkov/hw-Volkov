<?php
$hostname = 'localhost';
$username = 'Yura';
$password = 123;
$dbname = 'People';
$connect = mysqli_connect($hostname, $username, $password);
/*mysqli_query($connect, "CREATE DATABASE $dbname");*/
mysqli_select_db($connect, $dbname);
/*mysqli_query($connect, "CREATE TABLE People(
id_person INT(6) AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(20) NOT NULL,
Surname VARCHAR(30) NOT NULL,
Age INT
)");*/

$insert = "INSERT INTO People (Name, Surname, Age) VALUES ('Tom', 'Tomas', 10)";
if(mysqli_query($connect, $insert)){
    echo "Все хорошо";
} else{
    echo "Упс";
}





//$dbname = 'siti';

//$connect = mysqli_connect($hostname, $username, $password, $dbname) or die('Упс');
//var_dump(mysqli_connect_error());

/*try {
    $connect = mysqli_connect($hostname, $username, $password, $dbname);
    mysqli_set_charset($connect, 'utf8');
    $selectAll = mysqli_query($connect, "SELECT * FROM `Person` WHERE Name LIKE 'T%';");
    $selectArray = mysqli_fetch_all($selectAll, MYSQLI_ASSOC);
    echo '<pre>';
    print_r($selectArray);
    echo '</pre>';
} catch (Exception $e) {
    var_dump(mysqli_connect_error());
}*/
?>