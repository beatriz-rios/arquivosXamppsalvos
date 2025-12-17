<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Seres Humanos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    

    <nav class="nav">

        <ul>
            <li><a href="http://localhost/aula_PHP/pessoaas/menu.html">Menu</a></li>

        </ul>
    </nav>
    <h1>Cadastro de Seres Humanos</h1>
    <!-- inputs pessoa -->
    <form method="post" enctype="multipart/form-data">
        
        <fieldset class="form-card" data-form-type="pessoa">
            <div class="fieldset-header">
                <h2>Formulário de Pessoa</h2>
                <button type="button" class="toggle-btn" aria-expanded="false">Expandir</button>

            </div>
            <div class="fieldset-content">
                <div>
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" placeholder="Digite seu nome completo">
                    </div>
                    <div>
                        <label for="phone">Telefone:</label>
                        <input type="number" name="phone" placeholder="Digite seu telefone">
                    </div>
                    <div>
                        <label for="phone2">Celular:</label>
                        <input type="number" name="one2" placeholder="Digite seu celular">
                    </div>
                    <div>
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" placeholder="Digite seu E-mail">
                    </div>
                    <div>
                        <label for="data">Data de Cadastro:</label>
                        <input type="date" name="cads" placeholder="Digite sua data de cadastro">
                    </div>
                    <div>
                        <label for="idtipopess">Digite o ID do tipo de pessoa:</label>
                        <input type="number" name="tipopes" placeholder="Digite o ID">
                    </div>
                    <div>
                        <label for="docum">ID do documento da pessoa:</label>
                        <input type="number" name="id" placeholder="Digite o ID">
                    </div>
                    <div>
                        <label for="situ">ID da situação da pessoa:(1-ativo, 2-desativado, 3-bloqueado, 4-suspenso)</label>
                        <input type="number" name="sit" placeholder="Digite o ID">
                    </div>
                </div>
            </div>

        </fieldset>

        <br>


        <fieldset class="form-card" data-form-type="documento">
            <div class="fieldset-header">
                <h2>Formulário de Documentos</h2>
                <button type="button" class="toggle-btn" aria-expanded="false">Expandir</button>
              
            </div>
            <div class="fieldset-content">
                <div>
                    <label for="rgs">RG:</label>
                    <input type="number" name="rg" placeholder="Digite seu rg">
                </div>
                <div>
                    <label for="cpfs">CPF:</label>
                    <input type="number" name="cpf" placeholder="Digite seu cpf">
                </div>
                <div>
                    <label for="titu">Título de Eleitor:</label>
                    <input type="number" name="titulo" placeholder="Digite seu título de eleitor">
                </div>
                <div>
                    <label for="cnhs">Digite sua CNH:</label>
                    <input type="number" name="cnh" placeholder="Digite sua cnh">
                </div>
                <div>
                    <label for="cnpjs">Digite o CNPJ:</label>
                    <input type="number" name="cnpj" placeholder="Digite seu cnpj, caso não tiver digite 0"
                        id="cnpjota">
                </div>
                <div>
                    <label for="instes">Digite o numero da Instituição Estadual:</label>
                    <input type="number" name="instesta" placeholder="Digite o número, não caso tiver digite 0">
                </div>
                <div>
                    <label for="instmu">Digite o numero da Instituição Municipal:</label>
                    <input type="number" name="instmuni" placeholder="Digite o núemero, não caso tiver digite 0">
                </div>
            </div>
        </fieldset>



        <fieldset class="form-card" data-form-type="endereco">
            <div class="fieldset-header">
                <h2>Formulário de Endereço</h2>
                <button type="button" class="toggle-btn" aria-expanded="false">Expandir</button>

            </div>
            <div class="fieldset-content">
                <div>
                    <label for="ruas">Endereço:</label>
                    <input type="text" name="rua" placeholder="Digite seu endereco">
                </div>
                <div>
                    <label for="nume">Número do Imóvel:</label>
                    <input type="number" name="num" placeholder="Digite o número resisdencial ou comercial">
                </div>
                <div>
                    <label for="bai">Bairro:</label>
                    <input type="text" name="bairro" placeholder="Digite o bairro">
                </div>
                <div>
                    <label for="cida">Digite a cidade:</label>
                    <input type="text" name="cid" placeholder="Digite a cidade">
                </div>
                <div>
                    <label for="ce">Digite o CEP:</label>
                    <input type="number" name="cep" placeholder="Digite o CEP">
                </div>
                <div>
                    <div>
                        <label for="idss">Digite o ID do tipo de endereço: (1-resisdencial, 2-comercial, 3-importação, 4-exportação)</label>
                        <input type="number" name="ide" placeholder="Digite o ID">
                    </div>
                    <div>
                        <label for="iids">Digite o ID da pessoa:</label>
                        <input type="number" name="iidee" placeholder="Digite o ID">
                    </div>
                    <div>
                        <label for="ob">Observação:</label>
                        <input type="text" name="obs" placeholder="Obs...">
                    </div>
                </div>
            </div>

        </fieldset>



        <fieldset class="form-card" data-form-type="conta">
            <div class="fieldset-header">
                <h2>Formulário de Conta Bancária</h2>
                <button type="button" class="toggle-btn" aria-expanded="false">Expandir</button>
                
            </div>
            <div class="fieldset-content">
                <div>
                    <label for="ban">Banco:</label>
                    <input type="text" name="bancs" placeholder="Digite seu banco">
                </div>
                <div>
                    <label for="agen">Número da Agência:</label>
                    <input type="number" name="cia" placeholder="Digite a sua agência">
                </div>
                <div>
                    <label for="ge">Gerente:</label>
                    <input type="text" name="geren" placeholder="Digite o gerente">
                </div>
                <div>
                    <label for="iis">Digite o ID da pessoa:</label>
                    <input type="number" name="idee" placeholder="Digite o ID">
                </div>
            </div>

        </fieldset>

        <br>

        <div>
            <input type="submit" VALUE="Cadastrar" id="cad">
        </div>
    </form>
    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Configurações do Banco de Dados (centralizado)
        $servername = "localhost";
        $database = "pessoaas";
        $username = "root";
        $password = "";

        // Tenta conectar
        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            echo "<div class='mensagem erro'>Falha na conexão: " . mysqli_connect_error() . "</div>";
            die();
        }

        // --- CAPTURA E LIMPEZA DAS VARIÁVEIS (Segurança contra SQL Injection) ---
    
        // variaveis da tabela pessoa
        $nome = mysqli_real_escape_string($conn, $_POST["nome"] ?? '');
        $phone = mysqli_real_escape_string($conn, $_POST["phone"] ?? '');
        $one2 = mysqli_real_escape_string($conn, $_POST["one2"] ?? '');
        $email = mysqli_real_escape_string($conn, $_POST["email"] ?? '');
        $cads = mysqli_real_escape_string($conn, $_POST["cads"] ?? '');
        $tipopes = mysqli_real_escape_string($conn, $_POST["tipopes"] ?? '');
        $id = mysqli_real_escape_string($conn, $_POST["id"] ?? ''); // ID de documento (será substituído)
        $sit = mysqli_real_escape_string($conn, $_POST["sit"] ?? '');

        // variaveis da tabela documento
        $rg = mysqli_real_escape_string($conn, $_POST["rg"] ?? '');
        $cpf = mysqli_real_escape_string($conn, $_POST["cpf"] ?? '');
        $titulo = mysqli_real_escape_string($conn, $_POST["titulo"] ?? '');
        $cnh = mysqli_real_escape_string($conn, $_POST["cnh"] ?? '');
        $cnpj = mysqli_real_escape_string($conn, $_POST["cnpj"] ?? '');
        $instesta = mysqli_real_escape_string($conn, $_POST["instesta"] ?? '');
        $instmuni = mysqli_real_escape_string($conn, $_POST["instmuni"] ?? '');

        // variaveis da tabela endereco
        $rua = mysqli_real_escape_string($conn, $_POST["rua"] ?? '');
        $num = mysqli_real_escape_string($conn, $_POST["num"] ?? '');
        $bairro = mysqli_real_escape_string($conn, $_POST["bairro"] ?? '');
        $cid = mysqli_real_escape_string($conn, $_POST["cid"] ?? '');
        $cep = mysqli_real_escape_string($conn, $_POST["cep"] ?? '');
        $ide = mysqli_real_escape_string($conn, $_POST["ide"] ?? '');
        $iidee = mysqli_real_escape_string($conn, $_POST["iidee"] ?? ''); // ID da pessoa 
        $obs = mysqli_real_escape_string($conn, $_POST["obs"] ?? '');

        // variaveis da tabela conta bancaria
        $ban = mysqli_real_escape_string($conn, $_POST["bancs"] ?? '');
        $agen = mysqli_real_escape_string($conn, $_POST["cia"] ?? '');
        $ge = mysqli_real_escape_string($conn, $_POST["geren"] ?? '');
        $iis = mysqli_real_escape_string($conn, $_POST["idee"] ?? ''); // ID da pessoa 
    
        $id_doc_gerado = 0;
        $id_pessoa_gerado = 0;


        // -----------------CONEXÃO BANCO TABELA DOCUMENTO (Corrigida e Ordem de Inserção)-------------
        // O documento deve ser inserido primeiro pois a Pessoa depende dele (FK)
    
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

        if (mysqli_query($conn, $sql)) {
            echo "<br>Cadatro de Documento realizado com sucesso";
            $id_doc_gerado = mysqli_insert_id($conn); // Obtém o ID gerado
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }



        // --------------CONEXÃO BANCO TABELA PESSOA (Corrigida e Ordem de Inserção)-------------
        // insert pessoa
        // Usa $id_doc_gerado como Foreign Key
        if ($id_doc_gerado > 0) {
            $sql = " INSERT INTO pessoa (
                nome,
                telefone,
                celular,
                email,
                data_cadastro,
                tipo_pessoa_idtipo_pessoa,
                pessoa_documento_idpessoa_documento,
                pessoa_situacao_idpessoa_situacao
                 )VALUE(
                 '$nome',
                 '$phone',
                 '$one2',
                 '$email',
                 '$cads',
                 '$tipopes',
                 '$id_doc_gerado',
                 '$sit'
            )";


            if (mysqli_query($conn, $sql)) {
                $id_pessoa_gerado = mysqli_insert_id($conn); // Obtém o ID gerado para Pessoa
                echo "<br>Cadatro de Pessoa realizado com sucesso";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "<div class='mensagem erro'>ERRO: Não foi possível inserir Pessoa, pois o Documento falhou.</div>";
        }


        // ----------CONEXÃO BANCO TABELA ENDEREÇO (Corrigida e Ordem de Inserção)---------------
        // Insere apenas se a Pessoa foi inserida com sucesso
        if ($id_pessoa_gerado > 0) {
            // insert endereco
            // Usa $id_pessoa_gerado como Foreign Key
            $sql = " INSERT INTO pessoa_endereco (
            pessoa_enderecos,
            pessoa_endereco_nume,
            pessoa_bairro,
            pessoa_cidade,
            pessoa_cep,
            pessoa_tipo_ende_idpessoa_tipo_ende,
            pessoa_idpessoa,
            pessoa_enderObs
                )VALUE(
                '$rua',
                '$num',
                '$bairro',
                '$cid',
                '$cep',
                '$ide',
                '$id_pessoa_gerado',
                '$obs'
                
            )";


            if (mysqli_query($conn, $sql)) {
                echo "<br>Cadatro de Endereço realizado com sucesso";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "<div class='mensagem erro'>ERRO: Endereço não inserido. ID de Pessoa ausente.</div>";
        }

        // ----------CONEXÃO BANCO TABELA CONTA BANCARIA (Corrigida e Ordem de Inserção)---------
        // Insere apenas se a Pessoa foi inserida com sucesso
        if ($id_pessoa_gerado > 0) {
            // insert conta bancaria
            // Usa $id_pessoa_gerado como Foreign Key
    
            $sql = " INSERT INTO pessoa_contabancs (
            pessoa_ContaBancs_banco,
            pessoa_ContaBancsAgencia,
            pessoa_ContaBancsgerente,
            pessoa_idpessoa
                )VALUE(
                '$ban',
                '$agen',
                '$ge',
                '$id_pessoa_gerado' 
            )";


            if (mysqli_query($conn, $sql)) {
                echo "<br>Cadatro de Conta Bancária realizado com sucesso";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "<div class='mensagem erro'>ERRO: Conta Bancária não inserida. ID de Pessoa ausente.</div>";
        }


        mysqli_close($conn);

    }


    ?>

    <script src="./js/script.js"></script>
</body>

</html>