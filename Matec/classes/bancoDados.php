<?php

$servername = "localhost";
$dbname = "matec";
$username = "root";
$password = "";


$mysqli = new mysqli($servername, $username, $password, $dbname);

if($mysqli->connect_errno){
    echo $mysqli->connect_error;
} 

function dd($var, $exit = 1)
{
    echo "<div style='text-align: left'>";
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    echo "</div>";

    if ($exit) {
        exit;
    }
}
?>