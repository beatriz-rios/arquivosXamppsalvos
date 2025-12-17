<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Clientes</title>
    <link rel="stylesheet" href="stylefin.css">
</head>
<body action = 'consulta_cadastro.html'>
    
    <p>Coloque os seus dados a pedidos a seguir para proseguir com a transação bancária</p>

    <form method="post" enctype="multipart/form-data">
        <fieldset>
            Digite o id do cliente:<input type="number" name="cli">
            Nome:<input type="text" name="nome" ><br>
            Email:<input type="email" name="email"><br>
            Telefone:<input type="number" name="telefone">
            Endereço:<input type="text" name="endereco"><br>
            Cidade:<input type="text" name="cidade">
            Estado:<input type="text" name="estado"><br><br>

            
        </fieldset>
        <input type="submit" name="Enviar" class="envio">
            <button><a href="http://localhost/aula_PHP/consulta_cadastro.php">Consultar cadastro</a></button>
            <button><a href="http://localhost/aula_PHP/financeiro.php">Financeiro</a></button>
               <button><a href="http://localhost/aula_PHP/menu.php">Voltar para o menu.</a></button><br>
    </form>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $cli = $_POST["cli"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $moradia = $_POST["endereco"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];




         $servername = "localhost";
         $database = "movimentacoes";
         $username = "root";
         $password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "";
        
$sql = " INSERT INTO cliente (
id_cliente,
nome_cliente,
email_cliente,
telefone_cliente,
endereco_cliente,
cidade_cliente,
estado_cliente
)VALUE(
'$cli',
'$nome',
'$email',
'$telefone',
'$moradia',
'$cidade',
'$estado'
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



 


