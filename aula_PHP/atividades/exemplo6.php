<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
</head>
<body>
    <h1>Pesquisa de Campo</h1>
    <form method="post">
    <fieldset>
            <input type="text" name="nome" placeholder="Digite o seu nome">
            <input type="number" name="idade" placeholder="Digite a sua idade">
            <input type="email" name="e-mail" placeholder="Digite o seu email"><br>
            <label>Data de nascimento</label>
            <input type="date" name="data">
            <input type="text" name="nomePai" placeholder="Nome do Pai">
            <input type="text" name="nomeMae" placeholder="Nome da mãe"><br>
            <input type="submit" value="Gerar Formulário">
</fieldset>
    </form>
    <?php 
     if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $numero = $_POST["idade"];
        $gmail = $_POST["e-mail"];
        $dataNa = $_POST["data"];
        $nomeP = $_POST["nomePai"];
        $nomeM = $_POST["nomeMae"];

        $linha = "$nome | $numero | $gmail | $dataNa | $nomeP | $nomeM\n";

        file_put_contents("arquivos_registros/registro2.txt", $linha, FILE_APPEND);

        $arquivo = 'arquivos_registros/registro2.txt';
        if(file_exists($arquivo)){
            $linhas = file($arquivo);
            $dados_linhas = [];
            $max_campos = 0;

            //Processa todas as linhas
            foreach ($linhas as $linha){
                $dados = explode('|', trim($linha));
                $dados_linhas[] = $dados;
                if(count($dados) > $max_campos){
                    $max_campos = count($dados);
                }
            }
            //Gera a Tabela única
            echo"<table border='1' cellpadding='8' cellspacing='0'>";

            //Cabeçalhos genéricos
            echo"<tr>";
            for($i = 1; $i <= $max_campos; $i++){
                echo"<th> campo $i </th>";
            }
            echo"</tr>";

            //Linhas de dados
            foreach ($dados_linhas as $linha_dados){
                echo"<tr>";
                for($i = 0; $i < $max_campos; $i++){
                    $valor = isset($linha_dados[$i]) ? htmlspecialchars($linha_dados[$i]) : '';
                    echo"<td>$valor</td>";
                }
                echo"</tr>";
            }
            echo"</table>";
        }else{
            echo"Arquivo não encontrado.";}
        }
    ?>
</body>
</html>