// Pergunta : "Minha água está com pH alto, o que devo fazer?"
const phAlto = {
    probablyWords: ["minha", "água", "agua", "está", "esta", "com", "alto", "alcalino", "ácido", "acido", "nível", "nivel", "ph", "elevado", "acima", "mais", "normal", "estou"],
    matched: 0, 
}
// Pergunta : "Minha água está com gosto de ferrugem, como resolver?"
const gostoFerrugem = {
    probablyWords: ["minha", "água", "agua", "está", "esta", "com", "gosto", "de", "ferrugem", "ferro", "metálico", "metalico", "sabor", "estou"],
    matched: 0, 
}
// Pergunta : "Minha água está com um cheiro estranho, o que pode ser?"
const cheiroEstranho = {
    probablyWords: ["minha", "água", "água", "está", "esta", "com", "um", "cheiro", "estranho", "desagradável", "desagradavel", "odor", "aroma", "estou"],
    matched: 0, 
}
// Pergunta : "Estou tendo problemas com a pressão da água em minha casa, o que devo verificar?"
const pressaoBaixa = {
    probablyWords: ["estou", "tendo", "problemas", "com", "a", "pressão", "pressao", "da", "água", "agua", "em", "minha", "casa", "o", "que", "devo", "verificar", "fazer", "comprar", "estou"],
    matched: 0, 
}
// Pergunta : "Minha água está com uma cor escura, o que pode estar causando isso?"
const corEscura = {
    probablyWords: ["minha", "água", "agua", "está", "esta", "com", "uma", "cor", "escura", "preta", "marrom", "turva", "suja", "o", "que", "pode", "estar", "causando", "fazendo", "isso", "estou"],
    matched: 0,
}
// Pergunta : "Quais são os sinais de que minha água está contaminada por bactérias?"
const bacterias = {
    probablyWords: ["quais", "são", "sao", "os", "sinais", "de", "que", "minha", "água", "agua", "está", "esta", "contaminada", "por", "bactérias", "bacterias", "microorganismos", "infecciosa", "estou"],
    matched: 0, 
}
// Pergunta : "Como posso eliminar o gosto de cloro da minha água da torneira?"
const gostoCloro = {
    probablyWords: ["como", "posso", "eliminar", "o", "gosto", "de", "cloro", "da", "minha", "água", "agua", "da", "torneira", "tratamento", "piscina", "estou"],
    matched: 0, 
}
// Pergunta : "Estou preocupado com a presença de chumbo na minha água, como posso testá-la?"
const testeChumbo = {
    probablyWords: ["estou", "preocupado", "com", "a", "presença", "presenca", "de", "chumbo", "na", "minha", "água", "agua", "como", "posso", "testar", "ela", "testá", "testa", "la", "metais", "pesados", "análise", "analise", "teste", "estou"],
    matched: 0, 
}
// Pergunta : "Quais são os métodos mais eficazes para filtrar minha água em casa?"
const filtragem = {
    probablyWords: ["quais", "são",  "sao", "os", "métodos", "metodos", "mais", "eficazes", "eficientes", "melhores", "para", "filtrar", "minha", "água", "agua", "em", "casa", "purificar", "limpar", "filtração", "filtracao", "limpeza", "estou"],
    matched: 0, 
}

//Caso haja perguntas fora do tema
const papoFurado = {
    probablyWords: ["oi", "tudo", "bem", "quem", "é", "você", "vc", "piada", "idade", "sua", "onde", "mora", "gosta", "de", "que", "futebol", "política", "receitas", "notícias", "negócios", "tecnologia", "história", "ciência", "saúde", "ola"],
    matched: 0,
}

export const todosBancos = [phAlto, gostoFerrugem, cheiroEstranho, pressaoBaixa, corEscura, bacterias, gostoCloro, testeChumbo, filtragem, papoFurado]

// Respostas (agora retornam strings)
function showAnswer(index) {
    switch (index) {
        case 0:
            return "Um pH alto na água pode ser corrigido ajustando-o para um nível mais neutro, geralmente entre 6,5 e 8,5, usando produtos como ácido cítrico, ácido ascórbico ou bicarbonato de sódio.";
        case 1:
            return "O gosto de ferrugem geralmente indica a presença de ferro na água. Isso pode ser resolvido instalando um sistema de filtração de água.";
        case 2:
            return "Um cheiro estranho na água pode ser causado por várias razões, incluindo a presença de sulfeto de hidrogênio ou compostos orgânicos.";
        case 3:
            return "Problemas de pressão de água podem ser causados por vazamentos, obstruções nas tubulações ou problemas com o sistema de bombeamento.";
        case 4:
            return "Uma cor escura na água pode ser indicativa de sedimentos, minerais dissolvidos ou contaminantes orgânicos/inorgânicos.";
        case 5:
            return "Sinais de contaminação bacteriana incluem odor desagradável, gosto estranho e mudanças na cor da água.";
        case 6:
            return "Para eliminar o gosto de cloro, você pode usar um filtro de carvão ativado ou deixar a água descansar por algumas horas.";
        case 7:
            return "Para testar a presença de chumbo na água, use kits específicos ou solicite um teste em laboratório.";
        case 8:
            return "Métodos eficazes para filtrar água em casa incluem sistemas de osmose reversa e filtros de carvão ativado.";
        default:
            return "Não entendi sua pergunta. Pode reformular?";
    }
}

// Deduzir resposta
export function mostProbablyQuestion() {
    let matches = [
        phAlto.matched,
        gostoFerrugem.matched,
        cheiroEstranho.matched,
        pressaoBaixa.matched,
        corEscura.matched,
        bacterias.matched,
        gostoCloro.matched,
        testeChumbo.matched,
        filtragem.matched,
        papoFurado.matched
    ]

    const maxMatch = Math.max(...matches);
    
    // Se o maior match for 0 ou muito baixo, retorna resposta padrão
    if (maxMatch === 0) {
        return showAnswer(-1);
    }
    
    return showAnswer(matches.indexOf(maxMatch));
}
