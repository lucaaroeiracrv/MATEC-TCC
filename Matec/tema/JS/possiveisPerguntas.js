// Definindo uma classe para gerenciar os bancos de perguntas
class QuestionBank {
    constructor(probablyWords, answer) {
        this.probablyWords = probablyWords;
        this.answer = answer;
        this.matched = 0;
    }

    // Método para calcular a correspondência
    calculateMatch(inputWords) {
        this.matched = this.probablyWords.reduce((count, word) => 
            inputWords.includes(word) ? count + 1 : count, 0);
    }
}

// Criando instâncias para cada pergunta com bancos de palavras melhorados

// Pergunta : "Minha água está com pH alto, o que devo fazer?"
const phAlto = new QuestionBank(
    ["ph", "alto", "elevado", "alcalino", "ácido", "acido", "corrigir", "ajustar", "nível", "nivel", "neutro", "teste", "acidez", "alcalinidade", "reduzir"],
    "Um pH alto na água pode ser corrigido ajustando-o para um nível mais neutro..."
);

// Pergunta : "Minha água está com gosto de ferrugem, como resolver?"
const gostoFerrugem = new QuestionBank(
    ["gosto", "ferrugem", "ferro", "metálico", "metalico", "sabor", "oxidação", "oxidar", "remover", "desferrizador", "filtro"],
    "O gosto de ferrugem geralmente indica a presença de ferro na água..."
);

// Pergunta : "Minha água está com um cheiro estranho, o que pode ser?"
const cheiroEstranho = new QuestionBank(
    ["cheiro", "estranho", "odor", "desagradável", "desagradavel", "sulfeto", "hidrogênio", "hidrogenio", "contaminação", "compostos", "orgânicos", "organicos", "poluição", "contaminante"],
    "Um cheiro estranho na água pode ser causado por várias razões..."
);

// Pergunta : "Estou tendo problemas com a pressão da água em minha casa, o que devo verificar?"
const pressaoBaixa = new QuestionBank(
    ["pressão", "pressao", "baixa", "problemas", "água", "agua", "tubulação", "encanamento", "bomba", "fluxo", "reduzida", "casa", "residencial", "vazamento", "obstrução"],
    "Problemas de pressão de água podem ser causados por vários fatores..."
);

// Pergunta : "Minha água está com uma cor escura, o que pode estar causando isso?"
const corEscura = new QuestionBank(
    ["cor", "escura", "preta", "marrom", "água", "agua", "turva", "suja", "sedimentos", "minerais", "contaminantes", "orgânicos", "inorgânicos", "oxidação", "ferrugem"],
    "Uma cor escura na água pode ser indicativa de sedimentos..."
);

// Pergunta : "Quais são os sinais de que minha água está contaminada por bactérias?"
const bacterias = new QuestionBank(
    ["contaminação", "bactérias", "bacterias", "sinais", "sintomas", "microorganismos", "infecciosa", "doença", "doencas", "patógenos", "qualidade", "saúde", "filtro", "purificação"],
    "Sinais de contaminação bacteriana na água incluem odor desagradável..."
);

// Pergunta : "Como posso eliminar o gosto de cloro da minha água da torneira?"
const gostoCloro = new QuestionBank(
    ["gosto", "cloro", "remover", "eliminação", "torneira", "filtro", "carvão", "ativado", "evaporação", "tratamento", "sabor"],
    "Para eliminar o gosto de cloro da água da torneira..."
);

// Pergunta : "Estou preocupado com a presença de chumbo na minha água, como posso testá-la?"
const testeChumbo = new QuestionBank(
    ["teste", "chumbo", "metais", "pesados", "análise", "analise", "contaminantes", "presença", "água", "agua", "toxicidade", "saúde", "laboratório"],
    "Para testar a presença de chumbo na água, você pode usar kits de teste..."
);

// Pergunta : "Quais são os métodos mais eficazes para filtrar minha água em casa?"
const filtragem = new QuestionBank(
    ["filtrar", "métodos", "metodos", "eficazes", "eficientes", "purificação", "limpeza", "água", "agua", "osmose", "reversa", "carvão", "ativado", "cerâmica", "gravidade", "contaminantes"],
    "Existem vários métodos eficazes para filtrar água em casa..."
);

//Caso haja perguntas fora do tema
const papoFurado = new QuestionBank(
    ["oi", "tudo", "bem", "quem", "é", "você", "vc", "piada", "idade", "sua", "onde", "mora", "gosta", "de", "futebol", "política", "receitas", "notícias", "negócios", "tecnologia", "história", "ciência", "saúde", "comida", "filme", "música"],
    "Não entendi a sua pergunta, por favor reformule ou entre em contato com a empresa."
);

// Array com todas as perguntas
export const todosBancos = [phAlto, gostoFerrugem, cheiroEstranho, pressaoBaixa, corEscura, bacterias, gostoCloro, testeChumbo, filtragem, papoFurado];

// Função para determinar a resposta mais provável
export function mostProbablyQuestion(input) {
    const inputWords = input.toLowerCase().split(" ");
    todosBancos.forEach(questionBank => questionBank.calculateMatch(inputWords));

    // Encontrar a pergunta com mais correspondências
    const maxMatch = Math.max(...todosBancos.map(q => q.matched));
    const bestMatchIndex = todosBancos.findIndex(q => q.matched === maxMatch);

    return todosBancos[bestMatchIndex].answer;
}
