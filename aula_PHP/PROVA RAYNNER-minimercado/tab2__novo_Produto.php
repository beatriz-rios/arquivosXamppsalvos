<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Novo produto</title>
</head>
<body>
  <h1>Tabela Novo produto</h1>
     <nav>
  <ul>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/menu.php">Menu Inicial</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_Produtos.php">Formulario de cadastro de produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_funcionarios.php">Formulario de funcionários</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/forms1_caixa.php">Caixa</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form2_Novo_produto.php">Novo Produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/forms1_reajuste.php">Reajuste</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_Produtos.php">Registro de Produtos</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_funcionarios.php">Registro funcionarios</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_caixa.php">Registro Caixa</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_reajuste.php">Registro Reajuste</a></li>
  </ul>
</nav>



<?php
    $servername = "localhost";
 $database = "_mercado";
 $username = "root";
$password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

$sql = "SELECT * FROM novosprodutos";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");



$registros = mysqli_fetch_assoc($resultado);

echo'<style>
     #tabela{  
 border: 5px solid white;
 background-color: rgba(105, 231, 189, 1);
 color: rgba(85, 222, 199, 1);
 width: 100%;
 border-radius: 5px;

 }
 td, th{
 border: 2px solid rgba(51, 201, 156, 1);
 
 }
 </style>';


echo"<table border='3' cellpadding='8' cellspacing='0'>";
        echo'<tr>';
        echo'<th> idnovosProdutos </td>';
        echo'<th> nome</td>';
        echo'<th> descrição</td>';
        echo'<th>preço</td>';
        echo'<th>quantidade de estoque</td>';
        echo'<th> dataFabricação</td>';
        echo'<th> dataValidade</td>';
        echo'<th> produtos_idproduto </td>';
        
        echo'</tr>';

while($linha = mysqli_fetch_assoc($resultado)){
   
    
    echo'<td>' . $linha['idnovosProdutos'] . '</td>';
    echo'<td>' . $linha['nome'] .'</td>';
    echo'<td>' . $linha['descricao'] .'</td>';
    echo'<td>' . $linha['preco'] .'</td>';
    echo'<td>' . $linha['quantEstq'] .'</td>';
    echo'<td>' . $linha['dataFabri'] .'</td>';
    echo'<td>' . $linha['dataValid'] .'</td>';
    echo'<td>' . $linha['produtos_idproduto'] .'</td></tr>';
    

}
while($linha = mysqli_fetch_assoc($resultado)){
    echo $linha['idnovosProdutos'];
    echo $linha['nome'];
    echo $linha['descricao'];
    echo $linha['preco'];
    echo $linha['quantEstq'];
    echo $linha['dataFabri'];
    echo $linha['dataValid'];
    echo $linha['produtos_idproduto'];
    
}
  
if(mysqli_query($conn, $sql)){
    echo"<br>";
}else{
    echo"Error: " . $sql . "<br>" . mysqli_error($conn);


  echo'</table>';  

mysqli_close($conn);
}
?>
</body>
</html>
