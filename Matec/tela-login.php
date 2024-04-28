<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $usu = $_POST["email"];
    $sen = $_POST["senha"];

    $senCriptografada = password_hash($sen, PASSWORD_DEFAULT);

    var_dump($senCriptografada);

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
    <!-- header -->
    <nav class="navbar bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./tema/IMG/matec.png" class="imgHead">
            </a>
            <i class="fa-solid fa-user fa-2xl" style="color: #ffffff;"></i>
        </div>
    </nav>
    <!-- final header -->
    <!-- body -->
    <div class="container caixa">
        <div>
            <img src="./tema/IMG/matec-logo.png" class="imgEx">
        </div>
        <form method="post" class="formularioLog" id="formLog">
            <h2 class="classTxT">FAZER LOGIN</h2>
            <div class="mb-3 inptPad">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" aria-describedby="senhaDesc">
                <div id="senhaDesc" class="form-text">Nunca compartilharemos sua senha à ninguém.</div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembre-me de mim </label>
            </div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btnEntrar">ENTRAR</button>
            </div>
            <div class="bar"></div>

            <p class="cadTXT">Não Possui conta?<a href="cadastro.php">CADASTRE-SE</a></p>
        </form>
    </div>
    <!-- final body -->
</body>

</html>