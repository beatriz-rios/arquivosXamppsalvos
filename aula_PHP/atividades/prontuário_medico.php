<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prontuário médico</title>
     <link rel="stylesheet" href="stylemed.css">
</head>
<body>
    <h1>Prontuário Médico</h1>

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
            Digite o id do prontuário:  <input type="number" name="prontuario" class="ids"> 
            Digite o id do paciente:<input type="number" name="paciente" class="ids"><br><br>
             Digite o id do médico:<input type="number" name="medico" class="ids"><br><br>
             Data da consulta:<input type="date" name="consulta" class="ids"><br><br>
             Data do registro:<input type="date" name="registro" class="ids"><br><br>
             Descrição dos sintomas<input type="text" name="sint" class="ids"><br><br>
             Descrição do médico<input type="text" name="descri" class="ids"><br><br>
             Prescrição:<input type="text" name="prescri" class="ids" ><br><br>
             Observação<input type="text" name="obs" class="ids"><br><br>
           Arquivo <input type="file" name="arquivo"><br><br>
           
    <input type="submit" value="Enviar Anexo">
        </fieldset>
        
            <button><a href="http://localhost/aula_PHP/consulta_paciente.php">Ver cadastro paciente</a></button>
            <button><a href="http://localhost/aula_PHP/consulta.medico.php">Registro médico</a></button>
            <button><a href="http://localhost/aula_PHP/consulta_prontuario.php">Ver prontuario Médico</a></button>
            <button><a href="http://localhost/aula_PHP/menu_medico.php">Voltar para o menu.</a></button><br>
    </form>

    <?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $idpront = $_POST["prontuario"];
        $idpasc = $_POST["paciente"];
        $idmed = $_POST["medico"];
        $consul = $_POST["consulta"];
        $regist = $_POST["registro"];
        $sintomas = $_POST["sint"];
        $descr = $_POST["descri"];
        $prescricao = $_POST["prescri"];
        $obs = $_POST["obs"];
        $arquivo = $_FILES["arquivo"];
        $nome_arquivo = "";





         $servername = "localhost";
         $database = "banco01";
         $username = "root";
         $password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "";
        
$sql = " INSERT INTO prontuario (
idprontuario,
id_paciente,
id_medico,
data_consulta,
data_registro,
descricao_sintomas,
descricao_medico,
prescricao,
observacao
)VALUE(
'$idpront,
'$idpasc',
'$idmed ',
'$consul',
'$regist',
'$sintomas',
'$descr',
'$prescricao',
'$obs'
);";



if(mysqli_query($conn, $sql)){
    echo"<br>Comando executado com sucesso";
}else{
    echo"Error: " . $sql . "<br>" . mysqli_error($conn);
}


 mysqli_close($conn);
  $linha = "$nome| $anos |$moradia| $email | $valorSal | $horas | $salario |$nome_arquivo \n";

        file_put_contents("arquivos_registros/registro.txt", $linha, FILE_APPEND);
         
       
     }
  
 ?>
 </body>
 </html>
