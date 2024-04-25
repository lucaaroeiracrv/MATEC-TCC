<?php



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tema/CSS/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="caixaimg">
            <img src="tema/IMG/matec-logo.png">
        </div>
        <div class="conteudo">
            <div class="formlogin">
                <h2>LOGIN</h2>
                <form id="form_login_pag">
                    <div class="inputs">
                        <span>Nome de Usuário</span>
                        <input type="usu" id="usu" name="usu" placeholder="Usuario">
                    </div>

                    <div class="inputs">
                        <span>Senha</span>
                        <input type="password" id="senha" name="senha" placeholder="Senha">
                    </div>

                    <div class="lembrar">
                        <label>
                            <input type="checkbox"> Lembrar de mim
                        </label>
                        <a href="#">Esqueceu a senha?</a>
                    </div>

                    <div class="inputs">
                        <input type="submit" value="Entrar">
                    </div>

                    <div class="inputs">
                        <p>Não possui uma conta?<a href="cadastro.php">Crie uma conta</a></p>
                    </div>
                    <input type="hidden" name="hd_submit_usuario" value="1" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>
