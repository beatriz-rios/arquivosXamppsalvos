<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Paciente</title>
    <link rel="stylesheet" href="stylemed.css">
</head>
<body action = 'consulta_paciente.php'>
    
    <p>Cadastro do paciente</p>

    <form method="post" enctype="multipart/form-data">
        <fieldset>
            Digite o id do paciente:<input type="number" name="paciente" class="ids"><br><br>
            Nome do paciente:<input type="text" name="nome" class="ids"><br><br>
            CPF do paciente:<input type="number" name="cpf" class="ids"><br><br>
            Nome da mãe do paciente:<input type="text" name="mae" class="ids"><br><br>
           Data de nascimento do paciente:<input type="date" name="nasceu" class="ids"><br><br>
    <input type="submit" value="Enviar Anexo">
        </fieldset>
         </form>
        <div>
            <button><a href="http://localhost/aula_PHP/consulta_paciente.php" >Ver registro paciente</a></button>
            <button><a href="http://localhost/aula_PHP/consulta.medico.php">Registro médico</a></button>
            <button><a href="http://localhost/aula_PHP/prontu%c3%a1rio_medico.php">Prontuário Médico</a></button>
            <button><a href="http://localhost/aula_PHP/menu_medico.php">Voltar para o menu.</a></button><br>
            </div>
   

    <?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $idpasc = $_POST["paciente"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $mae= $_POST["mae"];
        $nascimento = $_POST["nasceu"];
       




         $servername = "localhost";
         $database = "banco01";
         $username = "root";
         $password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "";
        
$sql = " INSERT INTO paciente (
idpaciente,
nome_paciente,
cpf_paciente,
nomemae_paciente,
nascimento_paciente
)VALUE(
'$idpasc',
'$nome',
'$cpf',
'$mae',
'$nascimento'
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