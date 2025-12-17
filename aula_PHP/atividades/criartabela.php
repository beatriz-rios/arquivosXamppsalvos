

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Tabela</title>
    <link rel="stylesheet" href="styletab.css">
</head>
<body>
    <h1>Cadastro de roupas</h1><br>
   
    <form method="post" class="forms">

    Tipo de roupa:<input type="text" name="tipo" >
        Tamanho (PP,P,M.G ou GG):<input type="text" name="tamn"><br><br>

        COR:<input type="text" name="cores">
        Faixa Etária(Adulto, criança, jovem...):<input type="text" name="idade"><br><br>

        Genêro(feminino(F) ou masculino(M)): <input type="text" name="gen"> <br><br><br>
         Preço(R$):<input type="text" name="preco"><br><br>

    <br>
 
    </form>
        
    <div id = "quadro">
        <input class = "botao" type="submit" value="Gerar Formulário">
    </div>

<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){

        $tiporoupa = $_POST["tipo"];
       $tamanho = $_POST["tamn"];
        $cor = $_POST["cores"];
        $faixa = $_POST["idade"];
        $genero = $_POST["gen"];
        $preco = $_POST["preco"];
       

 $servername = "localhost";
 $database = "banco01";
 $username = "root";
 $password = "";

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "";

/*$sql = " insert into roupa (
tipo,
tamanho,
cor,
faixa_etaria,
genero,
preco_R$
);" ;

*/

$sql = "SELECT * FROM roupa";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");



$registros = mysqli_fetch_assoc($resultado);

echo"<table border='3' cellpadding='8' cellspacing='0'>";
        echo'<tr>';
        echo'<th> idroupa </td>';
        echo'<th> tipo </td>';
        echo'<th> tamanho </td>';
        echo'<th> cor </td>';
        echo'<th> faixa_etaria </td>';
        echo'<th> genero </td>';
        echo'<th> preco_R$ </td>';
        echo'</tr>';

while($linha = mysqli_fetch_assoc($resultado)){
   
    
    echo'<tr><td>' . $linha['idroupa'] . '</td>';
    echo'<td>' . $linha['tipo'] . '</td>';
    echo'<td>' . $linha['tamanho'] .'</td>';
    echo'<td>' . $linha['cor'] .'</td>';
    echo'<td>' . $linha['faixa_etaria'] .'</td>';
    echo'<td>' . $linha['genero'] .'</td>';
    echo'<td>' . $linha['preco_R$'] .'</td></tr>';
        

}
while($linha = mysqli_fetch_assoc($resultado)){
    echo $linha['idroupa'];
    echo $linha['tipo'];
    echo $linha['tamanho'];
    echo $linha['cor'];
    echo $linha['faixa_etaria'];
    echo $linha['genero'];
    echo $linha['preco_R$'];
}
  
if(mysqli_query($conn, $sql)){
    echo"<br>";
}else{
    echo"Error: " . $sql . "<br>" . mysqli_error($conn);
}

    

  echo'</table>';  
  
mysqli_close($conn);




  }
 ?>
</body>
</html>