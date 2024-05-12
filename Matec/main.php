<?php

session_start();

// $nomeUser = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./tema/CSS/main.css">
    <title>Main</title>
</head>

<body>
    <nav class="navbar bg-light border-bottom border-body" data-bs-theme="light" style="box-shadow: 0 1px 2px 0 rgba(60,64,67,.3), 0 2px 6px 2px rgba(60,64,67,.15);">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 navTitulo">MATEC</span>

            <i class="fa-solid fa-circle-user fa-2xl"></i>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class=" col-md-3 col-lg-1 px-sm-2 px-0" style="border-right: 1px solid rgb(218, 220, 224);" >
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu" style="width: 100%; padding:0 10px 0 10px;">
                        <li class="nav-item esapaco">
                            <a href="#" class="nav-link align-middle px-0">
                               ChatBot
                            </a>
                        </li>
                        <li class="nav-item esapaco">
                            <a href="#" class="nav-link px-0"> 
                                Listagem Clientes
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="centralizarTitle">
                    <h2>Bem Vindo Usuario</h2>
                </div>
                <div class="centralizarCont">
                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>