<?php

include("classes/bancoDados.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $numeroCelular = $_POST["numero_celular"];
    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO usuarios_cadastrados (email, numero_celular, nome, usuario, senha, ativo) VALUES ('$email', '$numeroCelular', '$nome', '$usuario', '$senha', '1')";
    $mysqli->query($sql);
    header("Location: tela-login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./tema/CSS/cadastro.css">
    <title>Cadastro</title>

</head>

<body>
    <div class="contPrincipal">
        <div class="centralizar">
            <div class="mb-3 imgLogo" style="padding-top: 5px;">
                <img src="./tema/IMG/matec-preto.png" class="img-fluid" alt="">
            </div>
            <br>
            <form method="POST">
                <div class="mb-3 espacamento">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3 espacamento">
                    <label for="numero_celular" class="form-label">Nº de Celular</label>
                    <input type="text" class="form-control" id="numero_celular" name="numero_celular">
                </div>
                <div class="mb-3 espacamento">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3 espacamento">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="mb-3 espacamento">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" aria-describedby="passwordHelpBlock" required>
                    <div id="passwordHelpBlock" class="form-text">
                        A senha deverá conter 5-20 caracteres e possuir letras e números sem espaços
                    </div>
                </div>
                <div class="mb-3 btnregistrar">
                    <button type="submit" class="btn btn-lg btn-primary">Registrar</button>
                </div>
            </form>
            <br>
            <div class="jaPossuiConta">
                <p>Já possui uma conta? <a href="tela-login.php">Iniciar Sessão</a></p>
            </div>
            <footer>
                <div class="center">
                    © 2024 Matec Autonomações
                </div>
            </footer>
        </div>
    </div>
</body>

</html>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

<script>
    jQuery(document).ready(function($) {
        $('#numero_celular').mask('(+99) 99999-9999');
    });
</script>