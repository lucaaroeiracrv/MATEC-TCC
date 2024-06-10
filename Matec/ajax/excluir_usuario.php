<?php
include_once("../classes/bancoDados.php");

if (isset($_POST['id']) && isset($_POST['ativo'])) {

    $id = $_POST['id'];
    $ativo = $_POST['ativo'];

    $sql = "UPDATE usuarios_cadastrados SET ativo = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ii', $ativo, $id);
    $stmt->execute();
    $resposta = $stmt->get_result();

    var_dump($resposta);

    $stmt->close();

    exit;
}


