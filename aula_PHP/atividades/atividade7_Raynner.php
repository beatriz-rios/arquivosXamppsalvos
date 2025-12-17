<!DOCTYPE html>
<html>
<head>
    <title>Tabuada em PHP</title>
</head>
<body>
    <h2>Calcularora</h2>
    <h3>Use esse números para fazer a equação</h3>
    

        <form method="post">
            Digite 1 número: <input type="number" name="numeroum" required>
            <br>
            Digite 2 número: <input type="number" name="numerodois" required>
            <br>
            Digite a equação: <input type="number" name="equacao" required>
            <br>
            <input type="submit" value="Gerar Tabuada">
</form>
<h4>+ = 1 número</h4>
    <h4>- = 2 número</h4>
    <h4>/ = 3 número</h4>
    <h4>* = 4 número</h4>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $numeroum = $_POST["numeroum"];
                $numerodois = $_POST["numerodois"];
                $equacao = $_POST["equacao"];
                echo "<h3>Resultado:</h3>";
                echo "<ul>";
                if($numeroum > 1){
                    if($numerodois >= 1){
                if($equacao == 1){
                    $resultado = $numeroum + $numerodois;
                    echo "<li>$numeroum + $numerodois = $resultado</li>";
                }
                if($equacao == 2){
                    $resultado = $numeroum - $numerodois;
                    echo "<li>$numeroum - $numerodois = $resultado</li>";
                }
                if($equacao == 3){  
                    $resultado = $numeroum / $numerodois;
                    echo "<li>$numeroum / $numerodois = $resultado</li>";
                    
                }
                if($equacao == 4){
                    $resultado = $numeroum * $numerodois;
                    echo "<li>$numeroum x $numerodois = $resultado</li>";
                }
            }else{echo"Não e possivel fazer uma equação usando o 0 sozinho";}
            }else{echo"Não e possivel fazer uma equação usando o 0 sozinho";}
                echo "</ul>";
            }
               
            ?>
</body>
</html>