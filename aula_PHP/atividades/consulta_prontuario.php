<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Cadastro</title>
    <link rel="stylesheet" href="stylefin.css">
</head>
<body>
    <h1>Seu Prontuário foi efetuado com sucesso!</h1>

<button><a href="http://localhost/aula_PHP/paciente.php">Voltar para o cadastro</a></button>
<button><a href="http://localhost/aula_PHP/menu_medico.php">Voltar para o menu inicial</a></button>

<?php

 $servername = "localhost";
 $database = "banco01";
 $username = "root";
$password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

$sql = "SELECT * FROM prontuario";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");



$registros = mysqli_fetch_assoc($resultado);

echo"<table border='3' cellpadding='8' cellspacing='0'>";
        echo'<tr>';
        echo'<th> idprontuario</td>';
        echo'<th>id_paciente</td>';
        echo'<th>id_medico</td>';
        echo'<th>data_consulta</td>';
        echo'<th>data_registro</td>';
        echo'<th>descricao_sintomas</td>';
        echo'<th>descricao_medico</td>';
        echo'<th>prescricao</td>';
        echo'<th>observacao</td>';
        echo'</tr>';

while($linha = mysqli_fetch_assoc($resultado)){
   
    echo'<td>' . $linha['idprontuario'] . '</td>';
    echo'<td>' . $linha['id_paciente'] . '</td>';
    echo'<td>' . $linha['id_medico'] .'</td>';
    echo'<td>' . $linha['data_consulta'] .'</td>';
    echo'<td>' . $linha['data_registro'] .'</td>';
    echo'<td>' . $linha['descricao_sintomas'] .'</td>';
    echo'<td>' . $linha['descricao_medico'] .'</td>';
    echo'<td>' . $linha['prescriacao'] .'</td>';
    echo'<td>' . $linha['observacao'] .'</td></tr>';
        

}
while($linha = mysqli_fetch_assoc($resultado)){
    echo $linha['idprontuario'];
    echo $linha['id_paciente'];
    echo $linha['id_medico'];
    echo $linha['data_consulta'];
    echo $linha['data_registro'];
    echo $linha['descricao_sintomas'];
    echo $linha['descricao_medico'];
    echo $linha['prescricao'];
    echo $linha['observacao'];
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