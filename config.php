<?php
/**
 * 
 * XAMPP CONTROL PANEL: 
 * http://localhost/works/portfolio-website-1/ 
 * $server = 'localhost';
 *   $username = 'root';
 *   $password = '';
 *   $dbname = 'portfoliodb';
 */

$server = 'mysql.caesar.elte.hu';
$username = 'oradam';
$password = 'Pcn30DFTv5zMLcR5';
$dbname = 'oradam';

$link = mysqli_connect($server, $username, $password, $dbname);

if(mysqli_connect_error()){
    die('Connection Error ('.mysqli_connect_error().')'.mysqli_connect_error());
} 
?>