<?php
include_once("../classes/bancoDados.php");

$pergunta = $_POST['question'];
// dd($pergunta);
$id_user = "10";
$horario = date("Y-m-d H:i:s");

if($pergunta) {

    global $mysqli;

    $stmt = $mysqli->prepare("INSERT INTO chatbot (id_user, pergunta, horario) VALUES (?, ?, ?)");
    $stmt->bind_param("iss",  $id_user,$pergunta,$horario);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}


?>