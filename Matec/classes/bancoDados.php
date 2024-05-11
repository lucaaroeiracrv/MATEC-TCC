<?php

$servername = "localhost";
$dbname = "matec";
$username = "root";
$password = "";


$mysqli = new mysqli($servername, $username, $password, $dbname);

if($mysqli->connect_errno){
    echo $mysqli->connect_error;
} 


?>