<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de TABUADA</title>
</head>
<body>
    <h2>Gerador de Tabuada</h2>
    <h3>a = +</h3>
    <h3>b = -</h3>
    <h3>c = /</h3>
    <h3>d = *</h3>
    <form method = "post">
        Digite o primeiro número: <input type= "number" name= "numero" required>
        Digite o segundo número: <input type= "number" name= "numerodois" required>
        Digite a equação: <input type= "text" name= "equacao" required>
        <input type="submit" value="Gerar Tabuada">
    </form>
     <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST["numero"];
        $numerodois = $_POST["numerodois"];
        $equacao = $_POST["equacao"];
        echo "<h3>O resultado co cálculo é:</h3>";
        echo "<ul>";
        if($numero >= 1){
        if($numerodois >= 2){
            
        if($equacao == "a"){
            $numeroresult = $numero + $numerodois;
            echo "<li>$numero + $numerodois = $numeroresult</li>";
        }
        
        if($equacao == "b"){
            $numeroresult = $numero - $numerodois;
            echo "<li>$numero - $numerodois = $numeroresult</li>";
        }
        
        if($equacao == "c"){
            $numeroresult = $numero / $numerodois;
            echo "<li>$numero / $numerodois = $numeroresult</li>";
        }
        
        if($equacao == "d"){
            $numeroresult = $numero * $numerodois;
            echo "<li>$numero * $numerodois = $numeroresult</li>";
        }
    }else{echo"Não  é possível fazer cálculo com o número 0.";}
        
}else {echo"Não  é possível fazer cálculo com o número 0.";}
echo"</ul>";
    }
    ?>
</body>
</html>