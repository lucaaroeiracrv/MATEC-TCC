<?php

include("classes/bancoDados.php");

session_start();

$user = $_SESSION['usuario']
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="./tema/CSS/main.css">
    <script type="module" src="./tema/JS/main.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Main</title>
</head>

<body>
    <div class="content">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Menu</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="listagem.php">Clientes</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </aside>
        <div class="user-profile-circle">
            <img src="./tema//IMG//usuario.png" alt="teste" />
        </div>
        <div class="conteudoMain">
            <br>
            <h3>Bem vindo(a) <?= $user ?> </h3>
        </div>
        <button class="chatbot-ativa">
            <span class="material-symbols-outlined">mode_comment</span>
            <span class="material-symbols-outlined">close</span>
        </button>
        <div class="chatbot">
            <header>
                <h2>ChatBot</h2>
            </header>
            <ul class="chatbox">
                <li class="chat user">
                    <span class="material-symbols-outlined">smart_toy</span>
                    <p>Olá 👋<br> como posso ajudá-lo hoje</p>
                </li>
            </ul>
            <div class="chat-input">
                <textarea placeholder="Escreva uma mensagem..." required></textarea>
                <span id="send-btn" class="material-symbols-outlined">send</span>
            </div>
        </div>
    </div>
</body>