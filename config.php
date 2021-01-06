<?php
session_start();
$dbHost = 'localhost';  //Credentails of Database that is created on Xampp server
$dbName = 'mydb';
$dbUsername = 'root';
$dbPassword = '';
$dbc = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

?>