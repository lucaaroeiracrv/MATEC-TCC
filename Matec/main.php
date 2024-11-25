<?php
include("classes/bancoDados.php");
session_start();
$user = $_SESSION['usuario'];

$sql = "SELECT COUNT(*) AS total_usuarios FROM usuarios_cadastrados"; 
$result = $mysqli->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $totalUsuarios = $row['total_usuarios'];
} else {
    $totalUsuarios = 0; 
}

$mysqli->close();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="./tema/CSS/main.css">
    <script type="module" src="./tema/JS/main.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function atualizarInteracoes() {
            $.ajax({
                type: "POST",
                url: "/matec-tcc/matec/ajax/interacoes_diarias.php",  // Caminho do arquivo PHP correto
                data: {},  // Sem parâmetros para enviar
                success: function (resposta) {
                    if (resposta) {
                        $('#totalInteracoes').text(resposta);
                    } else {
                        console.log('Erro ao buscar as interações');
                    }
                },
                error: function () {
                    console.log('Erro na requisição AJAX');
                }
            });
        }

        // Atualiza a cada 5 segundos
        setInterval(atualizarInteracoes, 5000);
        $(document).ready(function() {
            atualizarInteracoes();  // Chama ao carregar a página
        });
    </script>
    
    <title>Main</title>
</head>

<body>
    <div class="content">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Menu</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="main.php">Inicio</a></li>
                <li><a href="listagem.php">Clientes</a></li>
                <li><a href="index.php">Sair</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="main-content">
            <!-- User Profile Circle -->
            <div class="user-profile-circle">
                <img src="./tema/IMG/usuario.png" alt="teste" />
            </div>
            
           <!-- Welcome Message -->
<div class="welcome-text">
    <h3>Bem-vindo(a), <?= $user ?>!</h3>
    <p>Confira as estatísticas e o gráfico abaixo para obter uma visão geral.</p>
</div>

<!-- Estatísticas e Gráfico -->
<div class="stats-chart-container">
    <div class="stats">
        <div class="stat-item" id="clientes-cadastrados">
            <h3><?php echo $totalUsuarios; ?></h3>
            <p>Clientes Cadastrados</p>
        </div>
        <div class="stat-item" id="interacoes-hoje">
            <h3>Interações Hoje <span id="totalInteracoes"></span></h3>
        </div>
    </div>

    <!-- Gráfico de Interações (Chart.js) -->
    <div class="chart-container">
        <canvas id="chat-interaction-chart"></canvas>
    </div>
</div>


        <!-- Chatbot -->
        <button class="chatbot-ativa">
            <span class="material-symbols-outlined">mode_comment</span>
            <span class="material-symbols-outlined">close</span>
        </button>
        <div class="chatbot">
            <header>
                <h2>ChatBot</h2>
            </header>
            <ul class="chatbox">
                <li class="chat user">
                    <span class="material-symbols-outlined">smart_toy</span>
                    <p>Olá 👋<br> como posso ajudá-lo hoje</p>
                </li>
            </ul>
            <div class="chat-input">
                <textarea placeholder="Escreva uma mensagem..." required></textarea>
                <span id="send-btn" class="material-symbols-outlined">send</span>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: "/matec-tcc/matec/ajax/interacoes_mensais.php", 
                dataType: "json",
                success: function(dados) {
                    const labels = dados.map(item => item.mes);
                    const valores = dados.map(item => item.total_interacoes); 
                    
                    var ctx = document.getElementById('chat-interaction-chart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Interações',
                                data: valores,
                                borderColor: '#724ae8',
                                fill: false
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                },
                error: function() {
                    console.log('Erro ao buscar os dados do gráfico');
                }
            });
        });
    </script>
</body>
</html>
