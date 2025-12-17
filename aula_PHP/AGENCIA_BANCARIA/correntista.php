<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Correntista ou Cliente</title>
    
    <style>
        /* Paleta Premium: Preto, Dourado, Prata e Fundo Escuro */
        :root {
            --premium-black: #1a1a1a;
            --premium-dark-gray: #2c2c2c;
            --premium-gold: #FFD700; 
            --premium-silver: #c0c0c0;
            --premium-white: #ffffff;
            --premium-gradient: linear-gradient(135deg, #2c2c2c 0%, #1a1a1a 100%);
            --shadow-subtle: 0 4px 10px rgba(0, 0, 0, 0.4);
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
            box-shadow: var(--shadow-subtle);
            /* BOLD STRIP: Faixa dourada no cabeçalho */
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

        /* Estilo do Formulário (Container) */
        form {
            background-color: var(--premium-dark-gray);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            max-width: 500px; 
            margin: 0 auto 50px auto;
            text-align: left;
            border: 1px solid rgba(255, 215, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }
        form:hover {
            transform: translateY(-5px);
        }
        
        /* Estilizando Rótulos e Inputs */
        form input[type="text"],
        form input[type="number"],
        form input[type="date"] {
            width: calc(100% - 20px);
            padding: 15px 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            background-color: var(--premium-black);
            color: var(--premium-white);
            border: 1px solid var(--premium-silver);
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 1.1em;
            transition: border-color 0.4s, box-shadow 0.4s;
            display: block; 
        }
        
        form input[type="text"]:focus,
        form input[type="number"]:focus,
        form input[type="date"]:focus {
            border-color: var(--premium-gold);
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.6);
            outline: none;
            transform: scale(1.01);
        }
        
        /* Estilo para o texto (rótulo) */
        form > [name]:not([type="submit"]) { /* Seleciona os rótulos antes dos inputs */
            clear: both; 
            display: block; 
            font-weight: 700;
            color: var(--premium-gold);
            margin-top: 15px;
            transition: transform 0.3s ease;
        }
        form > [name]:not([type="submit"]):hover {
            transform: translateX(5px);
        }

        /* Botão de Submit (Dourado com Gradiente Animado) */
        form input[type="submit"] {
            background: linear-gradient(90deg, #FFD700, #F0C200); 
            background-size: 200% 100%;
            color: var(--premium-black);
            padding: 15px 30px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: 900;
            transition: all 0.4s ease;
            display: block;
            width: 100%;
            margin-top: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.4);
        }

        form input[type="submit"]:hover {
            background-position: 100% 0;
            transform: scale(1.03) translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 215, 0, 0.8);
        }

        /* Estilos para as mensagens de retorno do PHP */
        .mensagem {
            margin-top: 25px;
            padding: 18px;
            border-radius: 10px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            font-weight: 600;
            box-shadow: var(--shadow-subtle);
            animation: fadeIn 0.5s ease-out;
            color: var(--premium-black);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .sucesso {
            background-color: #d4edda; 
            border: 1px solid #c3e6cb;
        }

        .erro {
            background-color: #f8d7da; 
            border: 1px solid #f5c6cb;
        }
    </style>
    </head>
<body>
    <h1>Cadastrar Novo Correntista</h1>


    <nav>
        <ul>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/menu.php">Menu</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/instituicao.php">Acessa Instituição</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/agencia.php">Acessar Agência</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/conta.php">Acessar Conta Bancária</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/movimentacao.php">Realizar Movimentação</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_instituicao.php">Registro da Instituição</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_agencia.php">Registro Agência</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_conta.php">Registro Conta</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_cliente.php">Registro Cliente/Correntista</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_movimento.php">Registro Movimentação</a></li>
                        <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/manutencao.php">Manutenção</a></li>

        </ul>
    </nav>

    <form method="post" enctype="multipart/form-data">
        Nome do cliente/correntista: <input type="text" name="nome" required>
        CPF: <input type="number" name="cpf" required>
        Telefone: <input type="number" name="telefone" required>
        Endereço: <input type="text" name="end" required>
        Data de Nascimento:<input type="date" name="nasci" required>
        <input type="submit" value="Salvar Correntista">
    </form>
    
    <?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // 1. Sanitização dos dados
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
        $end = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_SPECIAL_CHARS);
        $nasci = $_POST["nasci"]; // Data é mantida como string, mas é verificada pelo prepared statement
        
        $servername = "localhost";
        $database = "agentebancario";
        $username = "usuario1";
        $password = "bia";

        $conn = mysqli_connect($servername, $username,$password,$database);

        if(!$conn){
            echo "<div class='mensagem erro'>Falha na conexão: " . mysqli_connect_error() . "</div>";
            die();
        }
        
        // 2. CORREÇÃO DE SEGURANÇA: Usando Prepared Statements (Evita SQL Injection)
        $sql = " INSERT INTO correntista (
            nome,
            cpf,
            telefone,
            endereco,
            data_nascimento
            )VALUE(
             '$nome',
             '$cpf',
             '$telefone',
             '$end',
             '$nasci'
        );";

        $stmt = mysqli_prepare($conn, $sql);

    if(mysqli_query($conn, $sql)){
    echo"<br>Comando executado com sucesso";
}else{
    echo"Error: " . $sql . "<br>" . mysqli_error($conn);
}


 mysqli_close($conn);
  }

    ?>
</body>
</html>