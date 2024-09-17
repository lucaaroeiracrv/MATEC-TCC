import { mostProbablyQuestion, todosBancos } from "./possiveisPerguntas.js";  // Certifique-se que este arquivo está correto e acessível

const chatInput = document.querySelector(".chat-input textarea");
const sendChatBtn = document.querySelector(".chat-input span");
const chatbox = document.querySelector(".chatbox");
const chatToggler = document.querySelector(".chatbot-ativa");  // Botão para ativar o chatbot
const chatWindow = document.querySelector(".chatbot-window");  // Janela do chatbot

let userMessage;
let palavrasPergunta;

const inputInitHeight = chatInput.scrollHeight;

// Função para criar o elemento da mensagem no chat
const createChatLi = (message, className) => {
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", className);
    let chatContent = className === "outgoing" ? `<p>${message}</p>` : `<span class="material-symbols-outlined">smart_toy</span> <p>${message}</p>`;
    chatLi.innerHTML = chatContent;
    return chatLi;
};

// Função para gerar a resposta
const generateResponse = (incomingChatLi) => {
    const messageElement = incomingChatLi.querySelector("p");

    // Limpa os valores matched de todos os bancos de perguntas
    todosBancos.forEach(banco => banco.matched = 0);

    // Remove a interrogação da pergunta do usuário, se houver
    if (userMessage[userMessage.length - 1] === "?") {
        userMessage = userMessage.slice(0, -1);
    }

    // Quebra a mensagem do usuário em palavras e transforma em minúsculas
    palavrasPergunta = userMessage.toLowerCase().split(" ");

    // Função para comparar a pergunta do usuário com o banco de dados
    function compararPergunta(banco) {
        const tamanhoBanco = banco.probablyWords.length;
        for (let i = 0; i < tamanhoBanco; ++i) {
            palavrasPergunta.forEach((palavra) => {
                if (banco.probablyWords[i] === palavra) {
                    banco.matched++;  // Incrementa o valor de matched se houver correspondência
                }
            });
        }
    }

    // Compara todas as perguntas no banco de dados
    function compararTodos() {
        todosBancos.forEach((banco) => {
            compararPergunta(banco);
        });
    }

    compararTodos();

    // Gera a resposta mais provável
    const resposta = mostProbablyQuestion();

    // Exibe a resposta no chat
    if (resposta && resposta !== "") {
        messageElement.textContent = resposta;
    } else {
        messageElement.textContent = "Desculpe, não entendi sua pergunta. Pode reformular?";
    }
};

// Função para salvar a pergunta no banco de dados
const salvarPergunta = (pergunta) => {
    $.ajax({
        type: "POST",
        url: '/matec-tcc/matec/ajax/salvar_mensagem_chat.php',
        data: {
            question: pergunta
        },
        success: function (resposta) {
            if (resposta) {
                console.log('Pergunta salva');
            } else {
                console.log('Erro ao salvar');
            }
        }
    });
};

// Função que lida com o envio da mensagem
const handleChat = () => {
    userMessage = chatInput.value.trim();
    if (!userMessage) return;  // Impede de enviar mensagem vazia
    chatInput.value = "";

    // Salva a pergunta no banco de dados via AJAX
    salvarPergunta(userMessage);

    // Adiciona a mensagem do usuário no chatbox
    chatbox.appendChild(createChatLi(userMessage, "outgoing"));
    chatbox.scrollTo(0, chatbox.scrollHeight);

    // Simula um tempo de resposta do bot
    setTimeout(() => {
        // Exibe a mensagem de "Pensando..."
        const incomingChatLi = createChatLi("Pensando...", "user");
        chatbox.appendChild(incomingChatLi);

        // Gera e insere a resposta no chat
        generateResponse(incomingChatLi);
    }, 600);
};

// Ajusta a altura do textarea de acordo com o conteúdo
chatInput.addEventListener("input", () => {
    chatInput.style.height = `${inputInitHeight}px`;
    chatInput.style.height = `${chatInput.scrollHeight}px`;
});

// Função para abrir e fechar o chatbot
const toggleChatbot = () => {
    document.body.classList.toggle("show-chatbot");

    if (document.body.classList.contains("show-chatbot")) {
        chatInput.focus();
    }
};

// Adiciona o evento de clique para abrir ou fechar o chatbot
chatToggler.addEventListener("click", toggleChatbot);

// Envia a mensagem ao clicar no botão de envio
sendChatBtn.addEventListener("click", handleChat);

// Fechar o chatbot ao clicar fora dele (opcional)
document.addEventListener("click", (e) => {
    if (!chatWindow.contains(e.target) && !chatToggler.contains(e.target)) {
        document.body.classList.remove("show-chatbot");
    }
});
