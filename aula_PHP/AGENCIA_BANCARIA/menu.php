<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal do Banco</title>
    
    <style>
        /* Paleta Premium: Preto, Dourado, Prata e Fundo Escuro */
        :root {
            --premium-black: #1a1a1a;
            --premium-dark-gray: #2c2c2c;
            --premium-gold: #FFD700; 
            --premium-silver: #c0c0c0;
            --premium-white: #ffffff;
            --premium-gradient: linear-gradient(135deg, #FFD700 0%, #F0C200 100%);
            --shadow-subtle: 0 4px 10px rgba(0, 0, 0, 0.4);
            --shadow-heavy: 0 8px 16px rgba(0, 0, 0, 0.6);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: var(--premium-silver);
            line-height: 1.6;
            /* Fundo Animado */
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

        header {
            /* Fundo escuro do header */
            background: var(--premium-dark-gray);
            padding: 25px 0;
            box-shadow: var(--shadow-heavy);
            margin-bottom: 40px;
            /* BOLD STRIP: Faixa dourada no topo */
            border-top: 5px solid var(--premium-gold); 
        }

        header h1 {
            color: var(--premium-gold);
            margin: 5px 0;
            font-size: 2.8em;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-shadow: 0 0 5px rgba(255, 215, 0, 0.5);
        }
        
        header h1:nth-of-type(2) { 
            font-size: 1.4em;
            color: var(--premium-silver);
            font-weight: 500;
            letter-spacing: 1px;
        }

        header h2 {
            font-size: 1.1em;
            color: var(--premium-silver);
            margin-top: 15px;
            font-weight: 400;
            border-bottom: 3px solid var(--premium-gold); /* Bold Strip na parte inferior */
            display: inline-block;
            padding-bottom: 10px;
        }

        /* Estilo para a Navegação (Área Principal de Links/Botões) */
        nav {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: grid;
            /* Layout responsivo com 3 colunas, mínimo de 250px */
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
            gap: 25px; 
        }

        nav ul li {
            background: var(--premium-black);
            border-radius: 16px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.6);
            transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
            border: 1px solid rgba(255, 215, 0, 0.1);
        }
        
        nav ul li:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.9);
            border-color: var(--premium-gold);
        }

        nav ul li a {
            text-decoration: none;
            color: var(--premium-silver);
            padding: 30px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            font-weight: 700;
            font-size: 1.2em;
            border-radius: 16px;
            /* Fundo sutil para links */
            background: linear-gradient(145deg, var(--premium-dark-gray) 0%, var(--premium-black) 100%); 
            transition: color 0.3s, background 0.3s;
        }

        /* Efeito de gradiente ao passar o mouse */
        nav ul li a:hover {
            color: var(--premium-black);
            background: var(--premium-gradient);
            background-size: 200% 200%;
            animation: gradient-flow 3s ease infinite;
        }
        
        @keyframes gradient-flow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
    </head>
<body>
    <header>
        <h1>💎 Elite Banking System</h1> 
        <h1>MENU PRINCIPAL DE ACESSO</h1>
        <h2>Acesso Rápido e Seguro a Todas as Transações e Registros.</h2>
    </header>

    <nav>
        <ul>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/instituicao.php">Acessar Instituição</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/agencia.php">Acessar Agência</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/conta.php">Acessar Conta Bancária</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/correntista.php">Cadastrar Cliente/Correntista</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/movimentacao.php">Realizar Movimentação</a></li>
            
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_instituicao.php">Registro da Instituição</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_agencia.php">Registro da Agência</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_conta.php">Registro da Conta</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_cliente.php">Registro Cliente/Correntista</a></li>
            <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/tab_movimento.php">Registro de Movimentação</a></li>
                        <li><a href="http://localhost/aula_PHP/AGENCIA_BANCARIA/manutencao.php">Manutenção</a></li>

        </ul>
    </nav>
</body>
</html>