<?php
$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");


//loop para ler todos os registros

$registros = mysqli_fetch_assoc($resultado);

while($linha = mysqli_fetch_assoc($resultado)){
    echo $linha['Cad_id'];
    echo $linha['Cad_nome'];
    echo $linha['Cad_endereco'];
    echo $linha['Cad_bairro'];
    echo $linha['Cad_cidade'];
    echo $linha['Cad_estado'];
    echo $linha['Cad_cep'];
}

mysqli_close($conn);



?>