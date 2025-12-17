<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Documentos</title>
</head>
<body>

<h1>Conta Bancaria</h1>

  <nav>
        <ul>
            <li><a href="http://localhost/aula_PHP/pessoaas/menu.html">Menu</a></li>
            <li><a href="http://localhost/aula_PHP/pessoaas/pessoa.php">Cadastre Seres Humanos</a></li>
            <li><a href="http://localhost/aula_PHP/pessoaas/enderecos.php">Endereço</a></li>
            <li><a href="http://localhost/aula_PHP/pessoaas/documento.php">Documentação</a></li>
        </ul>
    </nav>
    <form method="post" enctype="multipart/form-data">
       <div>
    <div>
        <label for="ban">Banco:</label>
        <input type="text" name="bancs" placeholder="Digite seu banco">
    </div>
 
<div>
    <label for="agen">Número da Agência:</label>
    <input type="number" name="cia" placeholder="Digite a sua agência">
    </div>

<div>
    <label for="ge">Gerente:</label>
    <input type="text" name="geren" placeholder="Digite o gerente">
    </div>

    <div>
        <label for="iis">Digite o ID da pessoa:</label>
        <input type="number" name="idee" placeholder="Digite o ID">
    </div>


    <input type="submit" VALUE="Cadastrar">

    </div>
    </form>

    <?php 
    
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

      
        
            $ban = $_POST["bancs"];
        $agen = $_POST["cia"];
        $ge = $_POST["geren"];
        $iis = $_POST["idee"];
      


        $servername = "localhost";
        $database = "pessoaas";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username,$password,$database);

        if(!$conn){
            echo "<div class='mensagem erro'>Falha na conexão: " . mysqli_connect_error() . "</div>";
            die();
        }
        
        // 2. CORREÇÃO DE SEGURANÇA: Usando Prepared Statements (Evita SQL Injection)
        $sql = " INSERT INTO pessoa_contabancs (
     pessoa_ContaBancs_banco,
     pessoa_ContaBancsAgencia,
        pessoa_ContaBancsgerente,
        pessoa_idpessoa
            )VALUE(
            '$ban',
            '$agen',
            '$ge',
            '$iis'
            
            
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