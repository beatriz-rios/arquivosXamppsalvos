<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finaceiro</title>
    <link rel="stylesheet" href="stylefin.css">
</head>
<body>
    <h1>Aqui você realiza qualquer transação finaceira que deseja.</h1>

    <form  method="post" enctype="multipart/form-data">
        <fieldset>
            Digite o id do movimento:<input type="number" name="idm"><br><br>
            Digite o id do cliente:<input type="number" name="cliente"><br><br>
            Informe o tipo de transação (Ex: Saque ou depósito): <input type="text" name="tipo"><br><br>
            Informe o valor que deseja depositar ou sacar em R$:<input type="number" name="val"><br><br>
            Data da realização bancára <input type="date" name="dat"><br><br>
           
        </fieldset>
        <div>
         <input type="submit" name="Enviar" class="envio">
            <button><a href="http://localhost/aula_PHP/menu.php">Voltar para o menu.</a></button><br>
        <button><a href="http://localhost/aula_PHP/consultar_finaceiro.php">Consultar Financeiro</a></button>
        </div>
    </form>

    <?php 


if($_SERVER["REQUEST_METHOD"] == "POST"){
        $idmov = $_POST["idm"];
        $idclin = $_POST["cliente"];
        $tipo = $_POST["tipo"];
        $valor = $_POST["val"];
        $data = $_POST["dat"];


         $servername = "localhost";
         $database = "movimentacoes";
         $username = "root";
         $password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "teste";
        
$sql = " INSERT INTO movimento (
id_movimento,
id_cliente,
tipo,
valor,
data_movimento
)VALUES(
'$idmov',
'$idclin',
'$tipo',
'$valor',
'$data'
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