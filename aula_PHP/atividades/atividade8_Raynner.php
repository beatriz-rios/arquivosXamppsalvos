<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de funcionários</title>
    <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>
    <h1>Formulário dos funcionários.</h1>
    <form method="post" enctype="multipart/form-data">
       <fieldset>
        Nome:<input type="text" name="nome" >
        Idade:<input type="number" name="idade">
        Endereço:<input type="text" name="endereço"><br><br>
        E-mail:<input type="email" name="gmail">
        Valor do salário por hora:<input type="number" name="salario">
        Horas trabalhadas por dia:<input type="number" name="trabalho"><br><br>
        Currículo <input type="file" name="curriculo"> <br><br>
        <input type="submit" value="Gerar Formulário">
        <button><a href="http://localhost/aula_PHP/continua_ativ8.php" target="_blank">Veja os formulários</a></button>
       </fieldset> 
    </form>

    <?php 

     if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $anos = $_POST["idade"];
        $moradia = $_POST["endereço"];
        $email = $_POST["gmail"];
        $valorSal = $_POST["salario"];
        $horas = $_POST["trabalho"];
        $arquivo = $_FILES["curriculo"];
        $pasta_destino = "pasta/";
        $nome_arquivo = "";

        $salario = ($valorSal*$horas*30);

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

        $linha = "$nome| $anos |$moradia| $email | $valorSal | $horas | $salario |$nome_arquivo \n";

        file_put_contents("arquivos_registros/registro.txt", $linha, FILE_APPEND);
         
       
     }
        ?>
</body>
</html>