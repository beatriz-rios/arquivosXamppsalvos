<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anexo prontuário</title>
    <link rel="stylesheet" href="stylemed.css">
</head>
<body action = 'anexo_pront.php'>
 <form action="upload.php" method="post" enctype="multipart/form-data">
        <fieldset>
     ID do prontuario:<input type="number" name="pront" class="ids"><br><br>
     ID do paciente:<input type="number" name = "pasc" class="ids" ><br><br>
     ID do médico:<input type="number" name = "med" class="ids"><br><br>
     Anexo<input type="file" name="image" > <br><br>
    
        <input type="submit" value="Enviar Anexo">
</fieldset>
<button><a href="http://localhost/aula_PHP/consulta_paciente.php">Ver cadastro paciente</a></button>
            <button><a href="http://localhost/aula_PHP/consulta.medico.php">Registro médico</a></button>
            <button><a href="http://localhost/aula_PHP/consulta_prontuario.php">Ver prontuario Médico</a></button>
            <button><a href="http://localhost/aula_PHP/anexopront_Tab.php">Ver Anexo</a></button>
            <button><a href="http://localhost/aula_PHP/menu_medico.php">Voltar para o menu.</a></button><br>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
       
 $idpron = $_POST["pront"];
        $idpront = $_POST["pront"];
        $idpasc = $_POST["pasc"];
        $idmed = $_POST["med"];
        $anexo = $_FILES["image"];
        $pasta_destino = "pasta/";
        $nome_arquivo = "";

         $servername = "localhost";
         $database = "banco01";
         $username = "root";
         $password = "";

        if($anexo["error"] === UPLOAD_ERR_OK){
            $nome_temp = $anexo["tmp_name"];
            $nome_final = $pasta_destino . basename($anexo["name"]);
            $nome_arquivo = basename($anexo["name"]);

            if(!file_exists($pasta_destino)){
                mkdir($pasta_destino,0755, true); //cria pasta se não existir
            }
            if(move_uploaded_file($nome_temp, $nome_final)){
                echo"Arquivo enviado com sucesso";
            }else{
                echo"Falha ao mover o arquivo";
            }
            
        }else{
            echo "❌ Erro no upload: " . $anexo["error"];
        }

       

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "";
        
$sql = " INSERT INTO anexo (
idpront,
idpaciente,
idmedico,
anexo
)VALUES(
'$idpront',
'$idpasc',
'$idmed',
'$nome_final'
)";



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