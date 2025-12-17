<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Médico</title>
     <link rel="stylesheet" href="stylemed.css">
</head>
<body>
    <h1>Registro do médico</h1>

    <button><a href="http://localhost/aula_PHP/paciente.php">Voltar para o cadastro</a></button>
<button><a href="http://localhost/aula_PHP/menu_medico.php">Voltar para o menu inicial</a></button>
<?php
    $servername = "localhost";
 $database = "banco01";
 $username = "root";
$password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

$sql = "SELECT * FROM medico";
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
        echo'<th> idmedico </td>';
        echo'<th> nome_medico </td>';
        echo'<th> especialidade_medico </td>';
        echo'<th> numero_crm </td>';
        echo'</tr>';

while($linha = mysqli_fetch_assoc($resultado)){
   
    
    echo'<td>' . $linha['idmedico'] . '</td>';
    echo'<td>' . $linha['nome_medico'] .'</td>';
    echo'<td>' . $linha['espicialidade_medico'] .'</td>';
    echo'<td>' . $linha['numero_crm'] .'</td></tr>';
    

}
while($linha = mysqli_fetch_assoc($resultado)){
    echo $linha['idmedico'];
    echo $linha['nome_medico'];
    echo $linha['especialidade_medico'];
    echo $linha['numero_crm'];
 
   
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