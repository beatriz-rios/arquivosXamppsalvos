<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta paciente</title>
     <link rel="stylesheet" href="stylemed.css">
</head>
<body>
    <?php
    $servername = "localhost";
 $database = "banco01";
 $username = "root";
$password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

$sql = "SELECT * FROM paciente";
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
        echo'<th> idpaciente </td>';
        echo'<th> nome_paciente </td>';
        echo'<th> cpf_paciente</td>';
        echo'<th> nomemae_paciente </td>';
        echo'<th> nascimento_paciente </td>';
        echo'</tr>';

while($linha = mysqli_fetch_assoc($resultado)){
   
    
    echo'<td>' . $linha['idpaciente'] . '</td>';
    echo'<td>' . $linha['nome_paciente'] .'</td>';
    echo'<td>' . $linha['cpf_paciente'] .'</td>';
    echo'<td>' . $linha['nomemae_paciente'] .'</td>';
    echo'<td>' . $linha['nascimento_paciente'] .'</td></tr>';
    

}
while($linha = mysqli_fetch_assoc($resultado)){
    echo $linha['idpaciente'];
    echo $linha['nome_paciente'];
    echo $linha['cpf_paciente'];
    echo $linha['nomemae_paciente'];
    echo $linha['nascimento_paciente'];
   
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