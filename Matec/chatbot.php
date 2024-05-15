<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATEC - Chatbot</title>
    <link rel="stylesheet" href="./tema/CSS/chatBot.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">MATEC</div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">Sobre</a></li>
                <li><a href="services.html">Serviços</a></li>
                <li><a href="contact.html">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="chat-container">
            <div class="chat-box" id="chat-box">
                <div class="message bot-message">Olá! Como posso ajudar você hoje?</div>
            </div>
            <div class="input-container">
                <input type="text" id="user-input" placeholder="Digite sua mensagem...">
                <button id="send-button">Enviar</button>
            </div>
        </div>
    </main>
</body>
</html>