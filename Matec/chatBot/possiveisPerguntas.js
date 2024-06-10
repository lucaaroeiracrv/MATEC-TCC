// Pergunta : "Minha água está com pH alto, o que devo fazer?"
const phAlto = {
    probablyWords: ["minha", "água", "agua", "está", "esta", "com", "alto", "alcalino", "ácido", "acido", "nível", "nivel", "ph", "elevado", "acima", "mais", "normal"],
    matched: 0, 
}
// Pergunta : "Minha água está com gosto de ferrugem, como resolver?"
const gostoFerrugem = {
    probablyWords: ["minha", "água", "agua", "está", "esta", "com", "gosto", "de", "ferrugem", "ferro", "metálico", "metalico", "sabor"],
    matched: 0, 
}
// Pergunta : "Minha água está com um cheiro estranho, o que pode ser?"
const cheiroEstranho = {
    probablyWords: ["minha", "água", "água", "está", "esta", "com", "um", "cheiro", "estranho", "desagradável", "desagradavel", "odor", "aroma"],
    matched: 0, 
}
// Pergunta : "Estou tendo problemas com a pressão da água em minha casa, o que devo verificar?"
const pressaoBaixa = {
    probablyWords: ["estou", "tendo", "problemas", "com", "a", "pressão", "pressao", "da", "água", "agua", "em", "minha", "casa", "o", "que", "devo", "verificar", "fazer", "comprar"],
    matched: 0, 
}
// Pergunta : "Minha água está com uma cor escura, o que pode estar causando isso?"
const corEscura = {
    probablyWords: ["minha", "água", "agua", "está", "esta", "com", "uma", "cor", "escura", "preta", "marrom", "turva", "suja", "o", "que", "pode", "estar", "causando", "fazendo", "isso"],
    matched: 0,
}
// Pergunta : "Quais são os sinais de que minha água está contaminada por bactérias?"
const bacterias = {
    probablyWords: ["quais", "são", "sao", "os", "sinais", "de", "que", "minha", "água", "agua", "está", "esta", "contaminada", "por", "bactérias", "bacterias", "microorganismos", "infecciosa"],
    matched: 0, 
}
// Pergunta : "Como posso eliminar o gosto de cloro da minha água da torneira?"
const gostoCloro = {
    probablyWords: ["como", "posso", "eliminar", "o", "gosto", "de", "cloro", "da", "minha", "água", "agua", "da", "torneira", "tratamento", "piscina"],
    matched: 0, 
}
// Pergunta : "Estou preocupado com a presença de chumbo na minha água, como posso testá-la?"
const testeChumbo = {
    probablyWords: ["estou", "preocupado", "com", "a", "presença", "presenca", "de", "chumbo", "na", "minha", "água", "agua", "como", "posso", "testar", "ela", "testá", "testa", "la", "metais", "pesados", "análise", "analise", "teste"],
    matched: 0, 
}
// Pergunta : "Quais são os métodos mais eficazes para filtrar minha água em casa?"
const filtragem = {
    probablyWords: ["quais", "são",  "sao", "os", "métodos", "metodos", "mais", "eficazes", "eficientes", "melhores", "para", "filtrar", "minha", "água", "agua", "em", "casa", "purificar", "limpar", "filtração", "filtracao", "limpeza"],
    matched: 0, 
}

//Caso haja perguntas fora do tema
const papoFurado = {
    probablyWords: ["oi", "tudo", "bem", "quem", "é", "você", "vc", "piada", "idade", "sua", "onde", "mora", "gosta", "de", "que", "futebol", "política", "receitas", "notícias", "negócios", "tecnologia", "história", "ciência", "saúde"],
    matched: 0,
}

export const todosBancos = [phAlto, gostoFerrugem, cheiroEstranho, pressaoBaixa, corEscura, bacterias, gostoCloro, testeChumbo, filtragem, papoFurado]

//Respostas (serao substituidas pela bascket)
function showAnswer(index) {
    switch (index) {
        case 0:
            return console.log("Um pH alto na água pode ser corrigido ajustando-o para um nível mais neutro, geralmente entre 6,5 e 8,5, usando produtos como ácido cítrico, ácido ascórbico ou bicarbonato de sódio. Recomenda-se testar o pH da água regularmente para garantir que esteja dentro da faixa adequada para consumo.")
        case 1:
            return console.log("O gosto de ferrugem geralmente indica a presença de ferro na água. Isso pode ser resolvido instalando um sistema de filtração de água que seja eficaz na remoção de ferro, como um filtro de óxido de ferro ou um filtro de mangânese verde. Um pré-tratamento, como a oxidação do ferro, também pode ser necessário em alguns casos.")
        case 2:
            return console.log("Um cheiro estranho na água pode ser causado por várias razões, incluindo a presença de sulfeto de hidrogênio (cheiro de ovo podre) ou contaminação por compostos orgânicos. Um teste de qualidade da água pode identificar a causa específica, permitindo a implementação de medidas corretivas apropriadas.")
        case 3:
            return console.log("Problemas de pressão de água podem ser causados por vários fatores, como vazamentos na linha de água, obstruções nas tubulações ou problemas com o sistema de bombeamento. Verificar vazamentos, limpar ou substituir filtros e inspecionar a bomba d'água são etapas iniciais para diagnosticar e resolver o problema.")
        case 4:
            return console.log("Uma cor escura na água pode ser indicativa de sedimentos, minerais dissolvidos ou até mesmo contaminantes orgânicos ou inorgânicos. Um teste de qualidade da água pode ajudar a identificar a causa exata, permitindo a implementação de medidas corretivas apropriadas, como a instalação de um filtro de água adequado.");
        case 5:
            return console.log("Sinais de contaminação bacteriana na água incluem odor desagradável, gosto estranho, mudanças na cor da água e a presença de partículas visíveis. Um teste de água específico para bactérias pode confirmar a presença delas, e a desinfecção da água usando cloro ou outros métodos adequados pode ser necessária para eliminar a contaminação.");
        case 6:
            return console.log("Para eliminar o gosto de cloro da água da torneira, você pode usar um filtro de carvão ativado, que absorve o cloro e outros compostos orgânicos, ou deixar a água em um recipiente aberto por algumas horas para permitir que o cloro evapore naturalmente.");
        case 7:
            return console.log("Para testar a presença de chumbo na água, você pode usar kits de teste específicos para chumbo disponíveis em lojas de ferragens ou solicitar um teste de qualidade da água em um laboratório certificado. Esses testes podem detectar até mesmo pequenas quantidades de chumbo na água.");
        case 8:
            return console.log("Existem vários métodos eficazes para filtrar água em casa, incluindo sistemas de osmose reversa, que removem uma ampla gama de contaminantes, filtros de carvão ativado, que eliminam sabores e odores indesejados, filtros de cerâmica, que retêm bactérias e partículas, e filtros de gravidade, que são simples de usar e podem ser eficazes na remoção de sedimentos e contaminantes. A escolha do método depende das necessidades específicas de filtragem e da qualidade da água local");
        default:
            return console.log("Não entendi a sua pergunta, por favor reformule a sua pergunta ou entre em contato com o a empresa")
    }
}

//Deduzir resposta
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

    return showAnswer(matches.indexOf(Math.max(...matches)))
}
