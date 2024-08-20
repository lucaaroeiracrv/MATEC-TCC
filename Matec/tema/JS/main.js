import { mostProbablyQuestion, todosBancos } from "./possiveisPerguntas.js";

const chatInput = document.querySelector(".chat-input textarea");
const sendChatBtn = document.querySelector(".chat-input span");
const chatbox = document.querySelector(".chatbox");
const chatToggler = document.querySelector(".chatbot-ativa");

let userMessage;
let palavrasPergunta;

const inputInitHeight = chatInput.scrollHeight;

const createChatLi = (message, className) => {
    // cria um <li> com a mensagem 
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", className);
    let chatContent = className === "outgoing" ? `<p>${message}</p>` : `<span class="material-symbols-outlined">smart_toy</span> <p>${message}</p>`
    chatLi.innerHTML = chatContent;
    return chatLi;
}

const generateResponse = (incomingChatLi) => {
    const messageElement = incomingChatLi.querySelector("p");

    if (userMessage[userMessage.length - 1] === "?") {
        userMessage = userMessage.slice(0, -1);
        palavrasPergunta = userMessage.toLowerCase().split(" ");
      } else {
        palavrasPergunta = userMessage.toLowerCase().split(" ");
      }

      function compararPergunta(banco) {
        const tamanhoBanco = banco.probablyWords.length;
        for (let i = 0; i < tamanhoBanco; ++i) {
          palavrasPergunta.forEach((palavra) => {
            if (banco.probablyWords[i] === palavra) {
              banco.matched++;
            }
          });
        }
      }
      function compararTodos() {
        todosBancos.forEach((banco) => {
          compararPergunta(banco);
        });
      }

    compararTodos();

    messageElement.textContent = mostProbablyQuestion();
}

const salvarPergunta = (pergunta) => {
    $.ajax({
        type: "POST",
        url: '/matec-tcc/matec/ajax/salvar_mensagem_chat.php',
        data: {
            question: pergunta
        },
        success: function(resposta) {
            if(resposta){
                console.log('Pergunta salvar');
            } else {
                console.log('Erro ao salvar');
            }
        }
    });
}

const handleChat = () => {
    userMessage = chatInput.value.trim();
    if(!userMessage) return ;
    chatInput.value = "";

    salvarPergunta(userMessage);
    // mensagem do usuario no chatbox
    chatbox.appendChild(createChatLi(userMessage, "outgoing"));
    chatbox.scrollTo(0, chatbox.scrollHeight);
    setTimeout(() => {
        // aparece a mensagem de aguarde
        const incomingChatLi = createChatLi("Pensando...", "user");
        chatbox.appendChild(incomingChatLi);
        generateResponse(incomingChatLi);
    }, 600);
}

chatInput.addEventListener("input", () => {
    chatInput.style.height = `${inputInitHeight}px`;
    chatInput.style.height = `${chatInput.scrollHeight}px`;
});

chatToggler.addEventListener("click",  () => document.body.classList.toggle("show-chatbot"));
sendChatBtn.addEventListener("click", handleChat)

