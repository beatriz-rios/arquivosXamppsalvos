<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Novo Produto</title>
</head>
<body>
    <h1>Novo Produto</h1>
    <form method="post" enctype="multipart/form-data">
Nome do Produto:<input type="text" name="nome">
Descrição:<input type="text" name="descri">
Preço:<input type="number" name="preco1">
Quantidade de Estoque:<input type="number" name="quantestq">
Data de Fabricação:<input type="date" name="fabridate">
Data de Validade:<input type="date" name="validate">
ID do Produto:<input type="number" name="idprod">
<input type="submit" value="Enviar">
    </form>
  <nav>
  <ul>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/menu.php">Menu Inicial</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_Produtos.php">Formulario de cadastro de produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_funcionarios.php">Formulario de funcionários</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/forms1_caixa.php">Caixa</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/forms1_reajuste.php">Reajuste</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_Produtos.php">Registro de Produtos</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_funcionarios.php">Registro funcionarios</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_caixa.php">Registro Caixa</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab2__novo_Produto.php">Registro Novo Produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_reajuste.php">Registro Reajuste</a></li>
  </ul>
</nav>

<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nomeprod = $_POST["nome"];
        $desc= $_POST["descri"];
        $preco = $_POST["preco1"];
        $quantes = $_POST["quantestq"];
        $datfabri = $_POST["fabridate"];
        $vali = $_POST["validate"];
        $idpr = $_POST["idprod"];
        
        

         $servername = "localhost";
         $database = "_mercado";
         $username = "root";
         $password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "";

$sql = " INSERT INTO novosprodutos (
nome,
descricao,
preco,
quantEstq,
dataFabri,
dataValid,
produtos_idproduto
)VALUE(
'$nomeprod',
'$desc',
'$preco',
'$quantes',
'$datfabri',
'$vali',
'$idpr'
);";



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