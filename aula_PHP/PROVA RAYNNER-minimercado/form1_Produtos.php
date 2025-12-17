<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Produtos</title>
</head>
<body>
 <nav>
  <ul>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/menu.php">Menu Inicial</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_funcionarios.php">Formulario de funcionários</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/forms1_caixa.php">Caixa</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form2_Novo_produto.php">Novo Produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/forms1_reajuste.php">Reajuste</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_Produtos.php">Registro de Produtos</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_funcionarios.php">Registro funcionarios</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_caixa.php">Registro Caixa</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab2__novo_Produto.php">Registro Novo Produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_reajuste.php">Registro Reajuste</a></li>
  </ul>
</nav>
<form method="post" enctype="multipart/form-data">
  
   Nome do Produto: <input type="text" name="produto">
Descrição:<input type="text" name="descri">
Preço do produto:<input type="number" name="preco">
Quantidade no Estoque:<input type="number" name="quant">
Data de Fabricação:<input type="date" name="fabi">
Data de Validade:<input type="date" name="valid">
Valor da Venda:<input type="number" name="valor">
 <input type="submit" value="Enviar Anexo">
</form>



<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $nomeprod = $_POST["produto"];
        $descri = $_POST["descri"];
        $preco = $_POST["preco"];
        $quantEstoq = $_POST["quant"];
        $fabric = $_POST["fabi"];
        $valid = $_POST["valid"];
        $venda = $_POST["valor"];
        
        
      

         $servername = "localhost";
         $database = "_mercado";
         $username = "root";
         $password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "";

$sql = " INSERT INTO produtos (
nomeProduto,
descricao,
preco,
quantEstq,
dataFabri,
dataValid,
valorVenda
)VALUE(
'$nomeprod',
'$descri',
'$preco',
'$quantEstoq',
'$fabric',
'$valid',
'$venda'
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