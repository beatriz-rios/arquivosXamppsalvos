<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de funcionario</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Produtos</title>
</head>
<body>
    <h1>Formulário de   funcionários</h1>

    <form method="post" enctype="multipart/form-data">

Nome<input type="text" name="nome">
CPF:<input type="number" name="cpf">
Data de Nascimento:<input type="date" name="nasceu">
Cargo:<input type="text" name="cargo">
Salário:<input type="number" name="salario">
Genêro:<input type="text" name="gen">
FOTO:<input type="file" name="foto">

 <input type="submit" value="Enviar Anexo">

</form>

 <nav>
  <ul>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/menu.php">Menu Inicial</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/form1_Produtos.php">Formulario de cadastro de produto</a></li>
    <li><a href="http://localhost/aula_PHP/PROVA%20RAYNNER-minimercado/forms1_caixa.php">Caixa</a></li>
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
       
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $dat = $_POST["nasceu"];
        $cargo = $_POST["cargo"];
        $salario = $_POST["salario"];
        $genero = $_POST["gen"];
        $arquivo = $_FILES["foto"];
          $pasta_destino = "pasta/";
        $nome_arquivo = "";
        
      
         $servername = "localhost";
         $database = "_mercado";
         $username = "root";
         $password = "";



         if($arquivo["error"] === UPLOAD_ERR_OK){
            $nome_temp = $arquivo["tmp_name"];
            $nome_final = $pasta_destino . basename($arquivo["name"]);
            $nome_arquivo = basename($arquivo["name"]);

            if(!file_exists($pasta_destino)){
                mkdir($pasta_destino,0755, true); //cria pasta se não existir
            }
            if(move_uploaded_file($nome_temp, $nome_final)){
                echo"Arquivo enviado com sucesso";
            }else{
                echo"Falha ao mover o arquivo";
            }
            
        }else{
            echo "❌ Erro no upload: " . $arquivo["error"];
        }

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "";

$sql = " INSERT INTO funcionarios(
nomeFunc,
cpf,
dataNascim,
cargo,
salario,
genero,
foto
)VALUE(
'$nome',
'$cpf', 
'$dat',
'$cargo', 
'$salario',
'$genero',
'$nome_final' 
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
