<?php

// $id = $_POST["email"];
// $nome = $_POST["numero_celular"];
// $email = $_POST["usuario"];
// $data = password_hash($_POST["senha"], PASSWORD_DEFAULT); 

// $mysqli = new mysqli('127.0.0.1', 'root', '', 'matec');

// $mysqli->query("UPDATE users SET user_name = '$nome', user_email = '$email'
//              WHERE users.id = $id");

// $sql = 'UPDATE users SET user_name = ?, user_email = ? WHERE users.id = ?';
// $stmt = $mysqli->prepare($sql);

// if(!$stmt){
//   echo 'erro na consulta: '. $mysqli->errno .' - '. $mysqli->error;
// }

// $stmt->bind_param('ssi', $nome, $email, $id);
// $stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
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
            <div class="mb-3 espacamento">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3 espacamento">
                <label for="numero_celular" class="form-label">Nº de Celular</label>
                <input type="text" class="form-control" id="numero_celular" name="numero_celular">
            </div>
            <div class="mb-3 espacamento">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="mb-3 espacamento">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                A senha deverá conter 8-20 caracteres e possuir letras e numeros sem espaços
                </div>
            </div>
            <div class="mb-3 btnregistrar">
                <button type="button" class="btn btn-lg btn-primary ">Registrar</button>
            </div>
            <br><br>
            <div class="jaPossuiConta">
                <p>Já Possui uma conta? <a href="">Iniciar Sessão</a></p>
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