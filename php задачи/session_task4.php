<?php
session_start();
$_SESSION['username'] = 'John';
print_r($_SESSION['username']);
session_unset();
session_destroy();
print_r($_SESSION['username']);
?>