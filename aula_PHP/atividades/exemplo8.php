<?php
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

       foreach ($dados_linhas as $linha_dados){
        echo"<tr>";
        for ($i = 0; $i < $max_campos; $i++){
            $valor = isset($linha_dados[$i]) ? htmlspecialchars($linha_dados[$i]) : ''; 
            echo "<td>$valor</td>";
        }
        echo "</tr>";
     }
     echo "</table>";      
     } else {
        echo "Arquivo não encontrado.";
     }
     ?>