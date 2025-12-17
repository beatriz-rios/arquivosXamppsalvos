<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulários</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
   Pesquisar relatório por nome: <input type="text" name="campo1">
   <input type="submit" value="filtrar"><br><br>
    Pesquisar relatório por número de horas trabalhadas:<input type="number" name="camp2">
    <input type="submit" value="filtrar"><br><br>
 Pesquisar relatório pelo valor do salário por hora:<input type="number" name="campo3">
    <input type="submit" value="filtrar"><br><br>
   
</form>
    <?php

     if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome1 = $_POST["campo1"];
    $hora = $_POST["camp2"];
   $salario = $_POST["campo3"];
  


$arquivo = 'arquivos_registros/registro.txt';

     if (file_exists($arquivo)){
     $linhas = file($arquivo);
     $dados_linhas = [];
     $max_campos = 0;
   

       foreach ($linhas as $linha){
     $dados = explode('|', trim($linha));
     $dados_linhas[] = $dados;
     if (count($dados) > $max_campos){
        $max_campos = count($dados);
     }
     }     

     echo "<table border='3' celloadding='11' cellspacing='4'>";

        echo "<tr>";
     for ($i = 1; $i <= $max_campos; $i++){
        echo "<th>Campo $i</th>";
     }
       echo "</tr>";

       foreach ($dados_linhas as $linha_dados){
        
         if($nome1 == $linha_dados[0] || $nome1 == null ){
             //echo"$linha_dados[0]", $nome1;
       //  if($hora == $linha_dados[4] >= 10){
            //echo"$linha_dados[5]", $hora;
         //   if($salario == $linha_dados[7] >= 10){
            //echo"$linha_dados[6]", $salario;            
        echo"<tr>";
        for ($i = 0; $i < $max_campos; $i++){
            $valor = isset($linha_dados[$i]) ? htmlspecialchars($linha_dados[$i]) : ''; 
            if($i == 7){
               echo "<td style='text-align:center;'><img src='./pasta/$valor' width='10%' height='10%'></td>";
            } else{
               echo "<td>$valor</td>";
           // }
        // }
        }
      }
      }
        echo "</tr>";
     }
     echo "</table>";      
     } else {
        echo "Arquivo não encontrado.";
     }
   }
     
     ?>
</body>
</html>