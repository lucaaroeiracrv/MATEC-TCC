<?php
include_once("../classes/bancoDados.php");

if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

$sql = "SELECT DATE_FORMAT(horario, '%Y-%m') AS mes, COUNT(*) AS total_interacoes FROM chatbot GROUP BY mes ORDER BY mes";
$result = $mysqli->query($sql);

$dados = array();
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $dados[] = $row; 
    }
    echo json_encode($dados); 
} else {
    echo json_encode([]);
}

$mysqli->close();
?>
