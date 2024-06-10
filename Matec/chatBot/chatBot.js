import readline from 'readline';
import { mostProbablyQuestion, todosBancos } from "./possiveisPerguntas";

// Cria uma interface readline para leitura de entrada do usuário
const rl = readline.createInterface({
  input: process.stdin,// Define a entrada como a entrada padrão do processo
  output: process.stdout// Define a saída como a saída padrão do processo
});

// Pede ao usuário que digite uma pergunta e define uma função de callback para processá-la
rl.question("Digite a sua pergunta: ", function(pergunta) {
  let palavrasPergunta;

  // Remove um ponto de interrogação do final da pergunta, se houver
  if (pergunta[pergunta.length - 1] === "?") {
    pergunta = pergunta.slice(0, -1);
    palavrasPergunta = pergunta.toLowerCase().split(" ");// Converte a pergunta em minúsculas e divide em palavras
  } else {
    palavrasPergunta = pergunta.toLowerCase().split(" ");// Converte a pergunta em minúsculas e divide em palavras
  }

  // Função para comparar as palavras da pergunta com um banco de palavras possíveis
  function compararPergunta(banco) {
    const tamanhoBanco = banco.probablyWords.length;
    for (let i = 0; i < tamanhoBanco; ++i) {
      palavrasPergunta.forEach((palavra) => {
        if (banco.probablyWords[i] === palavra) {
          banco.matched++;// Incrementa o contador de correspondências se uma palavra da pergunta coincide com uma palavra do banco
        }
      });
    }
  }

   // Função para comparar a pergunta com todos os bancos de palavras possíveis
  function compararTodos() {
    todosBancos.forEach((banco) => {
      compararPergunta(banco);// Chama a função compararPergunta para cada banco de palavras
    });
  }

  // Chama a função para comparar a pergunta com todos os bancos de palavras possíveis
  compararTodos();

  // Exibe a pergunta mais provável no console
mostProbablyQuestion();

  // Fecha a interface readline
  rl.close();
});
