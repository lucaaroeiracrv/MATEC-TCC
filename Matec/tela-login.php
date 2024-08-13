<?php

include("classes/bancoDados.php");

session_start();

if (isset($_POST['usuario'])) {

    $user = $_POST["usuario"];
    $sen = $_POST["senhaUsu"];

    $sql = "SELECT * FROM usuarios_cadastrados WHERE usuario = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // var_dump($row);
        if (password_verify($sen, $row['senha'])) {
            $_SESSION['usuario'] = $row['usuario'];
            header("Location: main.php");
            exit();
        }
    } else {
        echo "REGISTRO ERRADO";
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./tema/CSS/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container caixa">
        <div>
            <img src="./tema/IMG/matec-logo.png" class="imgEx">
        </div>
        <form method="post">
            <h2 class="classTxT">FAZER LOGIN</h2>
            <div class="mb-3 inptPad">
                <label for="usuario" class="form-label">Usuário</label>
                <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="senhaUsu" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senhaUsu" name="senhaUsu" aria-describedby="senhaDesc">
                <div id="senhaDesc" class="form-text">Nunca compartilharemos sua senha com ninguém.</div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btnEntrar">ENTRAR</button>
            </div>
            <div class="bar"></div>

            <p class="cadTXT">Não Possui conta? <a href="cadastro.php">CADASTRE-SE</a></p>
        </form>
    </div>
    <!-- final body -->
</body>


</html>