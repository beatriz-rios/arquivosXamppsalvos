<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médico</title>
     <link rel="stylesheet" href="stylemed.css">
</head>
<body action = 'consulta_medico.php'>
     
    <p>Cadastro do Médico</p>

    <form method="post" enctype="multipart/form-data">
        <fieldset>
            Digite o id do médico:<input type="number" name="medico" class="ids"><br><br>
            Nome do medico:<input type="text" name="nome" class="ids"><br><br>
            Especialidade do paciente:<input type="text" name="area" class="ids"><br><br>
            Número do CRM (Conselho Regional de Medicina):<input type="number" name="crm" class="ids"><br><br>
   
    <input type="submit" value="Enviar Anexo">
        </fieldset>
        
            <button><a href="http://localhost/aula_PHP/consulta_paciente.php">Ver cadastro paciente</a></button>
            <button><a href="http://localhost/aula_PHP/consulta.medico.php"> Ver Registro médico</a></button>
            <button><a href="http://localhost/aula_PHP/prontu%c3%a1rio_medico.php">Prontuário Médico</a></button>
            <button><a href="http://localhost/aula_PHP/menu_medico.php">Voltar para o menu.</a></button><br>
    </form>
    
    <?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $idmed = $_POST["medico"];
        $nome = $_POST["nome"];
        $especialidade = $_POST["area"];
        $crm = $_POST["crm"];
      
       




         $servername = "localhost";
         $database = "banco01";
         $username = "root";
         $password = "";







         
$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "";
        
$sql = " INSERT INTO medico(
idmedico,
nome_medico,
espicialidade_medico,
numero_crm
)VALUE(
'$idmed',
'$nome',
'$especialidade',
'$crm'
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