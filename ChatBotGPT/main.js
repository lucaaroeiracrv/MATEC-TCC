
// Função para enviar mensagens ao modelo de IA
function mandarMenssagem() {
    // Obtendo a mensagem digitada pelo usuário
    var menssagem = document.getElementById('menssagemEnviada')//.value.trim();

    // Verificando se a mensagem está vazia
    if(!menssagem.value){
        menssagem.style.border = '1px solid red'// Destacando o input do usuário em vermelho se estiver vazia
        return
    }

    menssagem.style.border = 'none'// Voltando a borda para a forma original 

    // Obtendo elementos para exibir status de carregamento e desativar o botão de envio
    var loading = document.getElementById('status')
    var botaoInativo = document.getElementById('enviar')

    // Exibindo status de carregamento e desativando o botão de envio
    loading.style.display = 'block'
    loading.innerHTML = 'Loading...'
    botaoInativo.disabled = true
    botaoInativo.style.cursor = 'not-allowed'
    menssagem.disabled = true


    // Enviando a mensagem para a API do OpenAI e aguardando a resposta
    fetch("https://api.openai.com/v1/completions",{

        // Configuração da requisição para a API do OpenAI
        method: 'POST',
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
            Authorization: `Bearer ${apiKey}`,
        },
        body: JSON.stringify({
            model: "gpt-3.5-turbo",
            prompt: menssagem.value,
             max_tokens: 2048, //tamanho recomendado da resposta na documentacao
            temperature: 0 // criatividade na resposta
        })
    })

    // Tratando a resposta da API
    .then((response) => response.json())
    .then((response) => {
        let resposta = response.choices[0]['text']// Obtendo a resposta gerada pelo modelo de IA
        
        
        loading.style.display = 'none' // Ocultando status de carregamento
        mostrarHistorico(menssagem.value,resposta)// Mostrando a conversa no histórico
    })

    // Lidando com erros, se houver
    .catch((e) => {

        // Exibindo mensagem de erro no status
        console.log(`Error -> ${e}`)
        loading.innerHTML = 'Erro, tente novamente mais tarde...'
    })

    // Executando ações finais, independentemente do resultado
    .finally(() => {

        // Reativando o botão de envio e reabilitando a entrada do usuário
        botaoInativo.disabled = false
        botaoInativo.style.cursor = 'pointer'
        menssagem.disabled = false
        menssagem.value = '' // Limpando a entrada de texto
    })
}

// Função para exibir a conversa no histórico de mensagens
function mostrarHistorico(menssagem, response) {
    var historico = document.getElementById('historico')

    //perguntas 
    var boxMinhasMenssagens = document.createElement ('div')
    boxMinhasMenssagens.className = 'boxMinhasMenssagens'

    var minhasMenssagens = document.createElement ('p')
    minhasMenssagens.className = 'minhasMenssagens'
    minhasMenssagens.innerHTML = menssagem

    boxMinhasMenssagens.appendChild(minhasMenssagens)
    historico.appendChild(boxMinhasMenssagens)
     
    //respostas
    var boxRespostas= document.createElement ('div')
    boxRespostas.className = 'boxRespostas'

    var respostas = document.createElement ('p')
    respostas.className = 'respostas'
    respostas.innerHTML = response

    boxRespostas.appendChild(respostas)
    historico.appendChild(boxRespostas)

    // Faz o histórico ir para a parte inferior para exibir a última mensagem
    historico.scrollTop = historico.scrollHeight

}