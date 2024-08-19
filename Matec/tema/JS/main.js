const chatInput = document.querySelector(".chat-input textarea");
const sendChatBtn = document.querySelector(".chat-input span");
const chatbox = document.querySelector(".chatbox");
const chatToggler = document.querySelector(".chatbot-ativa");

let userMessage;
const inputInitHeight = chatInput.scrollHeight;

const createChatLi = (message, className) => {
    // cria um <li> com a mensagem 
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", className);
    let chatContent = className === "outgoing" ? `<p>${message}</p>` : `<span class="material-symbols-outlined">smart_toy</span> <p>${message}</p>`
    chatLi.innerHTML = chatContent;
    return chatLi;
}

const generateResponse = () => {
    
}

const handleChat = () => {
    userMessage = chatInput.value.trim();
    if(!userMessage) return ;
    chatInput.value = "";
    // mensagem do usuario no chatbox
    chatbox.appendChild(createChatLi(userMessage, "outgoing"));
    chatbox.scrollTo(0, chatbox.scrollHeight);
    setTimeout(() => {
        // aparece a mensagem de aguarde
        chatbox.appendChild(createChatLi("Pensando...", "user"));
        generateResponse();
    }, 600);
}

chatInput.addEventListener("input", () => {
    chatInput.style.height = `${inputInitHeight}px`;
    chatInput.style.height = `${chatInput.scrollHeight}px`;
});

chatToggler.addEventListener("click",  () => document.body.classList.toggle("show-chatbot"));
sendChatBtn.addEventListener("click", handleChat)