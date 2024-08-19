<?php

session_start();

// $nomeUser = $_SESSION["usuario"];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./tema/CSS/main.css">
    <script src="./tema/JS/main.js" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <title>Main</title>
</head>

<body>
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
                <p>Olá  <br> como posso ajudá-lo hoje</p>
            </li>
        </ul>
        <div class="chat-input">
            <textarea placeholder="Escreva uma mensagem..." required></textarea>
            <span id="send-btn" class="material-symbols-outlined">send</span>
        </div>
    </div>
</body>
