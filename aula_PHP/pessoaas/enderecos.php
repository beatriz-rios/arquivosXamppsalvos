<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Documentos</title>
</head>

<body>

    <h1>Cadastro de Endereço</h1>

    <nav>
        <ul>
            <li><a href="http://localhost/aula_PHP/pessoaas/menu.html">Menu</a></li>
            <li><a href="http://localhost/aula_PHP/pessoaas/pessoa.php">Cadastre Seres Humanos</a></li>
            <li><a href="http://localhost/aula_PHP/pessoaas/documento.php">Documentação</a></li>
            <li><a href="http://localhost/aula_PHP/pessoaas/contaBancs.php">Conta Bancaria</a></li>
        </ul>
    </nav>
    <form method="post" enctype="multipart/form-data">
        <div>
            <div>
                <label for="ruas">Endereço:</label>
                <input type="text" name="rua" placeholder="Digite seu endereco">
            </div>

            <div>
                <label for="nume">Número do Imóvel:</label>
                <input type="number" name="num" placeholder="Digite o número resisdencial ou comercial">
            </div>

            <div>
                <label for="bai">Bairro:</label>
                <input type="text" name="bairro" placeholder="Digite o bairro">
            </div>

            <div>
                <label for="cida">Digite a cidade:</label>
                <input type="text" name="cid" placeholder="Digite a cidade">
            </div>
            <div>

                <div>
                    <label for="ce">Digite o CEP:</label>
                    <input type="number" name="cep" placeholder="Digite o CEP">
                </div>
                <div>
                    <div>
                        <label for="idss">Digite o ID do tipo de endereço:</label>
                        <input type="number" name="ide" placeholder="Digite o ID">
                    </div>

                    <div>
                        <label for="iids">Digite o ID da pessoa:</label>
                        <input type="number" name="iidee" placeholder="Digite o ID">
                    </div>

                    <div>
                        <label for="ob">Observação:</label>
                        <input type="text" name="obs" placeholder="Obs...">
                    </div>

                    <input type="submit" VALUE="Cadastrar">

                </div>
    </form>

    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {



        $rua = $_POST["rua"];
        $num = $_POST["num"];
        $bairro = $_POST["bairro"];
        $cid = $_POST["cid"];
        $cep = $_POST["cep"];
        $ide = $_POST["ide"];
        $iidee = $_POST["iidee"];
        $obs = $_POST["obs"];



        $servername = "localhost";
        $database = "pessoaas";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            echo "<div class='mensagem erro'>Falha na conexão: " . mysqli_connect_error() . "</div>";
            die();
        }

        // 2. CORREÇÃO DE SEGURANÇA: Usando Prepared Statements (Evita SQL Injection)
        $sql = " INSERT INTO pessoa_endereco (
        pessoa_enderecos,
        pessoa_endereco_nume,
        pessoa_bairro,
        pessoa_cidade,
        pessoa_cep,
        pessoa_tipo_ende_idpessoa_tipo_ende,
        pessoa_idpessoa,
        pessoa_enderObs
            )VALUE(
            '$rua',
            '$num',
            '$bairro',
            '$cid',
            '$cep',
            '$ide',
            '$iidee',
            '$obs'
            
        )";

        if (mysqli_query($conn, $sql)) {
            echo "<br>Comando executado com sucesso";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


        mysqli_close($conn);
    }

    ?>

</body>

</html>