<?php // Início do bloco PHP

// O código PHP pode estar vazio aqui, uma vez que este arquivo não executa nenhum código PHP diretamente

?> <!-- Fim do bloco PHP -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATEC - Chatbot</title>
    <link rel="stylesheet" href="./chatBot.css"> <!-- Link para um arquivo CSS -->
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
                <input type="text" id="user-input" placeholder="Digite sua mensagem..."> <!-- Input para o usuário digitar sua mensagem -->
                <button id="send-button">Enviar</button> <!-- Botão para enviar a mensagem -->
            </div>
        </div>
    </main>

    <!-- Script JavaScript para enviar e receber mensagens -->
    <script>
        // Adiciona um evento de clique ao botão "Enviar"
        document.getElementById('send-button').addEventListener('click', function() {
            var userInput = document.getElementById('user-input').value; // Captura o valor do input do usuário

            // Envia a pergunta para o backend usando AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'chatBot.js', true); // Requisição POST para o arquivo chatBot.js
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) { // Verifica se a requisição foi concluída com sucesso
                    var response = JSON.parse(xhr.responseText); // Converte a resposta em JSON
                    // Exibe a resposta no chat-box
                    var chatBox = document.getElementById('chat-box');
                    chatBox.innerHTML += '<div class="message user-message">' + userInput + '</div>'; // Exibe a mensagem do usuário
                    chatBox.innerHTML += '<div class="message bot-message">' + response.answer + '</div>'; // Exibe a resposta do chatbot
                }
            };
            xhr.send(JSON.stringify({ question: userInput })); // Envia a pergunta do usuário como JSON
        });
    </script>
</body>
</html>
