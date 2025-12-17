

<!-- Código que conecta no banco da dados -->
 <?php





 $servername = "localhost";
 $database = "banco01";
 $username = "root";
$password = "";
//cria conexão
$conn = mysqli_connect($servername, $username,$password,$database);

//verificar conexão 
if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "Conectado com sucesso";

/*$sql = " insert pessoanova2 (
idpessoanova,
pessoanova_nome  ,
pessoanova_cpf,
pessoanova_rg,
pessoanova_endereco ,
pessoanova_bairro ,
pessoanova_cep
);";

if(mysqli_query($conn, $sql)){
    echo"<br>Comando executado com sucesso";
}else{
    echo"Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);*/
$sql = "SELECT * FROM pessoanova2";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");


//loop para ler todos os registros

$registros = mysqli_fetch_assoc($resultado);

echo"<table border='3' cellpadding='8' cellspacing='0'>";
        echo'<tr>';
        echo'<th>idpessoanova </td>';
        echo'<th>pessoanova_nome </td>';
        echo'<th> pessoanova_cpf</td>';
        echo'<th>pessoanova_rg</td>';
        echo'<th> pessoanova_endereco</td>';
        echo'<th>pessoanova_bairro</td>';
        echo'<th>pessoanova_cep</td>';
        echo'</tr>';

while($linha = mysqli_fetch_assoc($resultado)){
   
    
            echo'<tr><td>' . $linha['idpessoanova'] . '</td>';
            echo'<td>' . $linha['pessoanova_nome'] . '</td>';
            echo'<td>' . $linha['pessoanova_cpf'] .'</td>';
            echo'<td>' . $linha['pessoanova_rg'] .'</td>';
            echo'<td>' . $linha['pessoanova_endereco'] .'</td>';
            echo'<td>' . $linha['pessoanova_bairro'] .'</td>';
            echo'<td>' . $linha['pessoanova_cep'] .'</td></tr>';
        

}


while($linha = mysqli_fetch_assoc($resultado)){
    echo $linha['idpessoanova'];
    echo $linha['pessoanova_nome'];
    echo $linha['pessoanova_cpf'];
    echo $linha['pessoanova_rg'];
    echo $linha['pessoanova_endereco'];
    echo $linha['pessoanova_bairro'];
    echo $linha['pessoanova_cep'];
}

    

mysqli_close($conn);
 

 ?>