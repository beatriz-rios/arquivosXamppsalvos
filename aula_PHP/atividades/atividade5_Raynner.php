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

        echo"<br> Nome: " . $nome;
        echo"<br> Idade: " . $numero;
        echo"<br> E-mail :" . $gmail;
        $dataNA1 = date("d/m/Y", strtotime($dataNa));

        echo"<br>Data de nacimento: " . $dataNA1;
        echo"<br> Nome do Pai: " . $nomeP;
        echo"<br> Nome da Mãe: " . $nomeM;

        $linha = "$nome | $numero | $gmail | $dataNa | $nomeP | $nomeM\n";

        file_put_contents("./Arquivos/registro.txt", $linha, FILE_APPEND);

       
     }
    ?>
</body>
</html>