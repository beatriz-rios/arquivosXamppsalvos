<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Financeiro</title>
    <link rel="stylesheet" href="stylefin.css">
</head>
<body>
    <button><a href="http://localhost/aula_PHP/consulta_cadastro.php">Consultar cadastro</a></button>
    <button><a href="http://localhost/aula_PHP/financeiro.php">Voltar para Financeiro</a></button>
    <button><a href="http://localhost/aula_PHP/menu.php">Voltar para o menu.</a></button><br>



<?php

 $servername = "localhost";
 $database = "movimentacoes";
 $username = "root";
$password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

$sql = "SELECT * FROM movimento";
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
        echo'<th> id_movimento </td>';
        echo'<th> id_cliente </td>';
        echo'<th> tipo </td>';
        echo'<th> valor </td>';
        echo'<th> data_movimento </td>';
        echo'</tr>';

while($linha = mysqli_fetch_assoc($resultado)){
   
    
    echo'<td>' . $linha['id_movimento'] . '</td>';
    echo'<td>' . $linha['id_cliente'] .'</td>';
    echo'<td>' . $linha['tipo'] .'</td>';
    echo'<td>' . $linha['valor'] .'</td>';
    echo'<td>' . $linha['data_movimento'] .'</td></tr>';
    

}
while($linha = mysqli_fetch_assoc($resultado)){
    echo $linha['id_movimento'];
    echo $linha['id_cliente'];
    echo $linha['tipo'];
    echo $linha['valor'];
    echo $linha['data_movimento'];
   
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