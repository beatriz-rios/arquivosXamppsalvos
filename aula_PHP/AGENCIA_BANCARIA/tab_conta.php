<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro das Contas Bancárias</title>

    <style>
        /* Paleta Premium: Preto, Dourado, Prata e Fundo Escuro */
        :root {
            --premium-black: #1a1a1a;
            --premium-dark-gray: #2c2c2c;
            --premium-gold: #FFD700; 
            --premium-silver: #c0c0c0;
            --premium-white: #ffffff;
            --premium-gradient: linear-gradient(135deg, #FFD700 0%, #F0C200 100%);
            --shadow-heavy: 0 8px 16px rgba(0, 0, 0, 0.6);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: var(--premium-silver);
            line-height: 1.6;
            background-image: linear-gradient(135deg, var(--premium-dark-gray) 0%, var(--premium-black) 100%);
            background-size: 200% 200%;
            animation: subtle-shift 30s ease infinite alternate;
            text-align: center; 
        }

        /* Animação para o fundo da página */
        @keyframes subtle-shift {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        h1 {
            text-align: center;
            color: var(--premium-gold);
            padding: 25px 0;
            margin-bottom: 30px;
            background: var(--premium-dark-gray);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            /* BOLD STRIP: Faixa dourada no topo */
            border-top: 5px solid var(--premium-gold); 
            border-bottom: 3px solid var(--premium-gold);
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* Estilo da Navegação (Menu) */
        nav {
            background: var(--premium-dark-gray);
            padding: 10px 0;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.7);
            margin-bottom: 40px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        nav ul li {
            margin: 5px 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--premium-silver);
            padding: 10px 18px;
            border-radius: 25px;
            transition: background-color 0.3s, transform 0.2s, color 0.3s;
            display: block;
            font-weight: 600;
        }

        nav ul li a:hover {
            color: var(--premium-gold);
            background-color: rgba(255, 215, 0, 0.15);
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 3px 8px rgba(255, 215, 0, 0.4);
        }

        /* Estilo da Tabela de Registros */
        #tabela {  
            width: 70%;
            max-width: 1000px;
            margin: 0 auto;
            border-collapse: collapse; 
            background-color: var(--premium-dark-gray);
            color: var(--premium-white);
            border-radius: 10px;
            overflow: hidden; 
            box-shadow: var(--shadow-heavy);
        }

        /* Cabeçalho da Tabela */
        #tabela th {
            background-color: var(--premium-gold);
            color: var(--premium-black);
            padding: 15px 10px;
            text-transform: uppercase;
            font-size: 0.9em;
            letter-spacing: 1px;
            border: none;
        }

        /* Células de Dados */
        #tabela td {
            padding: 12px 10px;
            border-bottom: 1px solid var(--premium-black); 
            border-right: 1px solid var(--premium-black);
            font-size: 0.9em;
        }

        /* Estilo de Linhas Alternadas (Zebrar a tabela) */
        #tabela tbody tr:nth-child(even) {
            background-color: #222222; 
        }
        #tabela tbody tr:nth-child(odd) {
            background-color: #333333; 
        }

        /* Hover nas Linhas */
        #tabela tbody tr:hover {
            background-color: #404040;
            color: var(--premium-gold);
            cursor: pointer;
        }

        /* Estilos de Mensagens */
        .mensagem {
            margin-top: 25px;
            padding: 18px;
            border-radius: 10px;
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            font-weight: 600;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            color: var(--premium-black);
        }
        .erro {
            background-color: #f8d7da; 
            border: 1px solid #f5c6cb;
        }
    </style>
    </head>
<body>
    <h1>Registro das Contas Bancárias</h1>

    <nav>
        <ul>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/menu.php">Menu</a></li>  
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/instituicao.php">Acessa Instituição</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/agencia.php">Acessar Agência</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/conta.php">Acessar Conta Bancária</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/correntista.php">Cadastrar Cliente ou Correntista</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/movimentacao.php">Realizar Movimentação</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_instituicao.php">Registro da Instituição</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_agencia.php">Registro Agência</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_cliente.php">Registro Cliente/Correntista</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_movimento.php">Registro Movimentação</a></li>
                        <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/manutencao.php">Manutenção</a></li>

            
        </ul>
    </nav>

<?php
    $servername = "localhost";
    $database = "agentebancario";
    $username = "usuario1";
    $password = "bia";

    // Tenta conectar
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verifica a conexão
    if (!$conn) {
        echo "<div class='mensagem erro'>Falha na conexão com o banco de dados: " . mysqli_connect_error() . "</div>";
        die();
    }

    $sql = "SELECT * FROM conta_bancaria";
    $resultado = mysqli_query($conn, $sql);

    // Verifica se a consulta foi bem-sucedida
    if (!$resultado) {
        echo "<div class='mensagem erro'>Erro ao retornar dados: " . mysqli_error($conn) . "</div>";
    } else {
        // Inicia a tabela HTML com a classe de estilo
        echo '<table id="tabela">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID Conta</th>';
        echo '<th>Número da Conta</th>';
        echo '<th>ID Correntista</th>';
        echo '<th>ID Agência</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        // Loop para exibir todos os registros
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($linha['idconta_bancaria']) . '</td>';
            echo '<td>' . htmlspecialchars($linha['numero_conta']) . '</td>';
            echo '<td>' . htmlspecialchars($linha['correntista_idcorrentista']) . '</td>';
            echo '<td>' . htmlspecialchars($linha['agencia_idagencia']) . '</td>';
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';

        // Libera o resultado
        mysqli_free_result($resultado);
    }
    
    // Fechamento da conexão
    mysqli_close($conn);
?>
</body>
</html>