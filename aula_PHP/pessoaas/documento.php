<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Documentos</title>
</head>
<body>

<h1>Cadastro de Documentos</h1>

  <nav>
        <ul>
            <li><a href="http://localhost/aula_PHP/pessoaas/menu.html">Menu</a></li>
            <li><a href="http://localhost/aula_PHP/pessoaas/pessoa.php">Cadastre Seres Humanos</a></li>
            <li><a href="http://localhost/aula_PHP/pessoaas/enderecos.php">Endereço</a></li>
            <li><a href="http://localhost/aula_PHP/pessoaas/contaBancs.php">Conta Bancaria</a></li>
        </ul>
    </nav>
    <form method="post" enctype="multipart/form-data">
       <div>
    <div>
        <label for="rgs">RG:</label>
        <input type="number" name="rg" placeholder="Digite seu rg">
    </div>
    <div>

    <label for="cpfs">CPF:</label>
    <input type="number" name="cpf" placeholder="Digite seu cpf">
    </div>


    <label for="titu">Título de Eleitor:</label>
    <input type="number" name="titulo" placeholder="Digite seu título de eleitor">
    </div>

    <div>
        <label for="cnhs">Digite sua CNH:</label>
        <input type="number" name="cnh" placeholder="Digite sua cnh">
    </div>

    <div>
        <label for="cnpjs">Digite o CNPJ:</label>
        <input type="number" name="cnpj" placeholder="Digite seu cnpj ou 00.000.000/0000-00 se não tiver" id="cnpjota">
    </div> 

    <div>
        <label for="instes">Digite o numero da Instituição Estadual:</label>
        <input type="number" name="instesta" placeholder="Digite o número">
    </div>

    <div>
        <label for="instmu">Digite o numero da Instituição Municipal:</label>
        <input type="number" name="instmuni" placeholder="Digite o núemero">
    </div>

    <input type="submit" VALUE="Cadastrar">

    </div>
    </form>

    <?php 
    
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){



         $rg = $_POST["rg"];
        $cpf = $_POST["cpf"];
        $titulo = $_POST["titulo"];
        $cnh = $_POST["cnh"];   
        $cnpj = $_POST["cnpj"];
        $instesta = $_POST["instesta"];
        $instmuni = $_POST["instmuni"];



        
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
        $sql = " INSERT INTO pessoa_documento (
            pessoa_documento_rg,
            pessoa_documento_cpf,
            pessoa_documento_titulo,
            pessoa_documento_cnh,
            pessoa_documento_cnpj,
            pessoa_inst_estadual,
            pessoa_inst_municipal
            )VALUE(
            '$rg',
            '$cpf',
            '$titulo',
            '$cnh',
            '$cnpj',
            '$instesta',
            '$instmuni'
            
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