<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 7 pasta e arquivo</title>
</head>
<body>
    <form method = "post" enctype="multipart/form-data">
        <label>Selecione o arquivo:</label><br>
        <input type="file" name="arquivo"><br><br>
        <input type="submit" value = "Emviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $pasta_destino = "pasta/";
        $arquivo = $_FILES["arquivo"];

        if($arquivo["error"] ===UPLOAD_ERR_OK){
            $nome_temp = $arquivo["tmp_name"];
            $nome_final = $pasta_destino . basename($arquivo["name"]);

            if(!file_exists($pasta_destino)){
                mkdir($pasta_destino,0755, true); //cria pasta se nÂo existir
            }
            if(move_uploaded_file($nome_temp, $nome_final)){
                echo"Arquivo enviado com sucesso";
            }else{
                echo"Falha ao mover o arquivo";
            }
            
        }else{
            echo "❌ Erro no upload: " . $arquivo["error"];
        }
    }
    ?>
</body>
</html>