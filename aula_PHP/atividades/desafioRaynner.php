<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de funcionários</title>
    <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>
    <h1>Formulário de inscriação.</h1>
    <h3>Insira seus dados para criação de seu formulário!</h3>
    <form method="post" enctype="multipart/form-data">
       <fieldset>
ID:<input type="numbers" name="ids" >

        Nome:<input type="text" name="nome" >
          CPF:<input type="text" name="cpf"><br><br>

        RG:<input type="text" name="rg">
        Endereço:<input type="text" name="endereço"><br><br>

        Bairro:<input type="text" name="bar">
        CEP: <input type="text" name="cep"> <br><br>

        <input type="submit" value="Gerar Formulário">
       
       </fieldset> 
    </form>

    <?php 

     if($_SERVER["REQUEST_METHOD"] == "POST"){
        $idpes = $_POST["ids"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $moradia = $_POST["endereço"];
        $bairro = $_POST["bar"];
        $cep = $_POST["cep"];
       
        $pasta_destino = "pasta/";
       

        
 
 $servername = "localhost";
 $database = "banco01";
 $username = "root";
$password = "";
//cria conexão
$conn = mysqli_connect($servername, $username,$password,$database);

//verificar conexão 
if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "Conectado com sucesso";

$sql = "insert pessoanova2 (
idpessoanova,
pessoanova_nome,
pessoanova_cpf,
pessoanova_rg,
pessoanova_endereco,
pessoanova_bairro,
pessoanova_cep
 ) VALUES (
'$idpes',
'$nome',
'$cpf',
'$rg',
'$moradia',
'$bairro',
'$cep'
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