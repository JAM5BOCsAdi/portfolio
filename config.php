<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'portfoliodb';

$link = mysqli_connect($server, $username, $password, $dbname);

if(mysqli_connect_error()){
    die('Connection Error ('.mysqli_connect_error().')'.mysqli_connect_error());
} 
?>