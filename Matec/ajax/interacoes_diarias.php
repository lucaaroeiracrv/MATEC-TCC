<?php
include_once("../classes/bancoDados.php");

if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

$sql = "SELECT COUNT(*) AS total_interacoes FROM chatbot WHERE DATE(horario) = CURDATE()";
$result = $mysqli->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    echo $row['total_interacoes']; 
} else {
    echo 0;
}

$mysqli->close();
?>
