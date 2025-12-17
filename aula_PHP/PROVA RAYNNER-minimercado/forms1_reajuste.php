<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Reajuste de produto</title>
</head>
<body>
   <h1>Formulário reajuste</h1>
   <form method="post" enctype="multipart/form-data">

Valor de Custo:<input type="number" name="valorcust">
Valor de Venda: <input type="number" name="valor">
ID do Produto:<input type="number" name="idpro">
<input type="submit" value="Enviar">
   </form>
      <nav>
  <ul>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/menu.php">Menu Inicial</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_Produtos.php">Formulario de cadastro de produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_funcionarios.php">Formulario de funcionários</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/forms1_caixa.php">Caixa</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form2_Novo_produto.php">Novo Produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_Produtos.php">Registro de Produtos</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_funcionarios.php">Registro funcionarios</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_caixa.php">Registro Caixa</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab2__novo_Produto.php">Registro Novo Produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_reajuste.php">Registro Reajuste</a></li>
  </ul>
</nav>


<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
       
        $custo = $_POST["valorcust"];
        $venda = $_POST["valor"];
       $idpro = $_POST["idpro"];
        

         $servername = "localhost";
         $database = "_mercado";
         $username = "root";
         $password = "";


         $preconovo = ($venda - $custo );
         $novo = $preconovo / $custo;
         $total = $novo * 100; 

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "";

$sql = " INSERT INTO reajusteproduto (
valorCusto,
valorVenda,
precoNovo,
produtos_idproduto
)VALUE(
'$custo',
'$venda',
'$total',
'$idpro'
)";



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
