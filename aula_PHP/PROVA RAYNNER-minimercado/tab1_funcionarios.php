<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de funcionarios</title>
</head>
<body>
  <h1>Tabela de funcionarios</h1>
<nav>
  <ul>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/menu.php">Menu Inicial</a></li> 
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_Produtos.php">Formulario de cadastro de produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_funcionarios.php">Formulario de funcionários</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/forms1_caixa.php">Caixa</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form2_Novo_produto.php">Novo Produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/forms1_reajuste.php">Reajuste</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_Produtos.php">Registro de Produtos</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_caixa.php">Registro Caixa</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab2__novo_Produto.php">Registro Novo Produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_reajuste.php">Registro Reajuste</a></li>
  </ul>
</nav>

<?php
    $servername = "localhost";
 $database = "_mercado";
 $username = "root";
$password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

$sql = "SELECT * FROM funcionarios";
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
        echo'<th> idfuncionarios </td>';
        echo'<th> nomeFunc </td>';
        echo'<th> cpf</td>';
        echo'<th> dataNascimento </td>';
        echo'<th> cargo</td>';
        echo'<th> salario</td>';
        echo'<th> genero</td>';
        echo'<th> foto</td>';
        echo'</tr>';

while($linha = mysqli_fetch_assoc($resultado)){
   
    
    echo'<td>' . $linha['idfuncionario'] . '</td>';
    echo'<td>' . $linha['nomeFunc'] .'</td>';
    echo'<td>' . $linha['cpf'] .'</td>';
    echo'<td>' . $linha['dataNascim'] .'</td>';
    echo'<td>' . $linha['cargo'] .'</td>';
    echo'<td>' . $linha['salario'] .'</td>';
    echo'<td>' . $linha['genero'] .'</td>';
    echo'<td>' . $linha['foto'] .'</td></tr>';
    

}
while($linha = mysqli_fetch_assoc($resultado)){
    echo $linha['idfuncionario'];
    echo $linha['nomeFunc'];
    echo $linha['cpf'];
    echo $linha['dataNascim'];
    echo $linha['cargo'];
    echo $linha['salario'];
    echo $linha['genero'];
    echo $linha['foto'];
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