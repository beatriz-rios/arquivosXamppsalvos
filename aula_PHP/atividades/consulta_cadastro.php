<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Cadastro</title>
    <link rel="stylesheet" href="stylefin.css">
</head>
<body>
    <h1>Seu Cadastro foi efetuado com sucesso! Volte para página incial de cadastro e clique no botão 'Financeiro' para começar alguma transação bancária.</h1>

<button><a href="http://localhost/aula_PHP/cadastro_clientes.php">Voltar para o cadastro</a></button>
 <button><a href="http://localhost/aula_PHP/consultar_finaceiro.php">Consultar Financeiro</a></button>
<button><a href="http://localhost/aula_PHP/menu.php">Voltar para o menu inicial</a></button>
<?php

 $servername = "localhost";
 $database = "movimentacoes";
 $username = "root";
$password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

$sql = "SELECT * FROM cliente";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");



$registros = mysqli_fetch_assoc($resultado);

echo"<table border='3' cellpadding='8' cellspacing='0'>";
        echo'<tr>';
        echo'<th> id_cliente</td>';
        echo'<th> nome_cliente </td>';
        echo'<th> email_cliente </td>';
        echo'<th> telefone_cliente </td>';
        echo'<th> endereco_cliente </td>';
        echo'<th> cidade_cliente </td>';
        echo'<th> estado_cliente </td>';
        echo'</tr>';

while($linha = mysqli_fetch_assoc($resultado)){
   
    echo'<td>' . $linha['id_cliente'] . '</td>';
    echo'<td>' . $linha['nome_cliente'] . '</td>';
    echo'<td>' . $linha['email_cliente'] .'</td>';
    echo'<td>' . $linha['telefone_cliente'] .'</td>';
    echo'<td>' . $linha['endereco_cliente'] .'</td>';
    echo'<td>' . $linha['cidade_cliente'] .'</td>';
    echo'<td>' . $linha['estado_cliente'] .'</td></tr>';
        

}
while($linha = mysqli_fetch_assoc($resultado)){
    echo $linha['id_cliente'];
    echo $linha['nome_cliente'];
    echo $linha['email_cliente'];
    echo $linha['telefone_cliente'];
    echo $linha['endereco_cliente'];
    echo $linha['cidade_cliente'];
    echo $linha['estado_cliente'];
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