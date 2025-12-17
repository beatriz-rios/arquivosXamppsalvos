<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário do Caixa</title>
</head>
<body>
  <h1>Formulário Caixa</h1>
    <form method="post" enctype="multipart/form-data">


Preço do Produto:<input type="number" name="precoprod">
Saída Valor<input type="number" name="saidaval">
Saldo no Começo do Dia:<input type="number" name="comecodia">
Saldo do Final do Dia:<input type="number" name="finaldia">
Forma de Pagamento:<input type="text" name="formpag">
ID do funcioário:<input type="number" name="idfunc">
<input type="submit" value="Enviar Anexo">
    </form>
     <nav>
  <ul>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/menu.php">Menu Inicial</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_Produtos.php">Formulario de cadastro de produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_funcionarios.php">Formulario de funcionários</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form2_Novo_produto.php">Novo Produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/forms1_reajuste.php">Reajuste</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_Produtos.php">Registro de Produtos</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_funcionarios.php">Registro funcionarios</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_caixa.php">Registro Caixa</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab2__novo_Produto.php">Registro Novo Produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/tab1_reajuste.php">Registro Reajuste</a></li>
  </ul>
</nav>


<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $preco= $_POST["precoprod"];
        $saida = $_POST["saidaval"];
        $comecodia = $_POST["comecodia"];
        $finaldia = $_POST["finaldia"];
        $formpag = $_POST["formpag"];
        $idfunc = $_POST["idfunc"];

         $servername = "localhost";
         $database = "_mercado";
         $username = "root";
         $password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "";

$sql = " INSERT INTO caixa (
precoProdut,
saidaValor,
saldoComecoDia,
saldoFinalDia,
formaPagament,
funcionarios_idfuncionario
)VALUE(
'$preco',
'$saida',
'$comecodia',
'$finaldia',
'$formpag',
'$idfunc'
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