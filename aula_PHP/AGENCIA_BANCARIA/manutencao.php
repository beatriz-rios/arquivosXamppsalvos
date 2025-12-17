<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manutenção</title>

  <style>
    /* Estilo geral */
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #0a0a0a; /* Preto fundo fosco */
      color: #c0c0c0; /* Prata */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
    }

    h1 {
      color: #d4af37; /* Dourado */
      font-size: 2.2em;
      margin-bottom: 30px;
      text-shadow: 1px 1px 5px #000;
    }

    form {
      background: #1a1a1a; /* Preto mais claro */
      padding: 35px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(212, 175, 55, 0.4); /* Sombra dourada */
      max-width: 400px;
      width: 100%;
      text-align: center;
      border: 1px solid #555;
    }

    input[type="number"] {
      width: 80%;
      padding: 12px;
      margin: 15px 0;
      border: 1px solid #c0c0c0;
      border-radius: 6px;
      background-color: #0d0d0d;
      color: #f0f0f0;
      font-size: 1em;
      outline: none;
      transition: 0.3s;
    }

    input[type="number"]:focus {
      border-color: #d4af37;
      box-shadow: 0 0 8px #d4af37;
    }

    input[type="submit"] {
      background-color: #d4af37;
      color: #000;
      padding: 12px 25px;
      font-weight: bold;
      font-size: 1em;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s;
    }

    input[type="submit"]:hover {
      background-color: #e5c869;
      transform: scale(1.05);
    }

    .message {
      margin-top: 25px;
      font-size: 1em;
      color: #c0c0c0;
      text-align: center;
    }

    .success {
      color: #d4af37;
    }

    .error {
      color: #ff4d4d;
    }
  </style>
</head>
<body>
  <h1>Manutenção e Exclusão de Dados</h1>
  <form method="post">
    Digite o número do ID da movimentação que deseja excluir:
    <br><br>
    <input type="number" name="idcli" placeholder="ID da movimentação" required>
    <br><br>
    <input type="submit" value="Excluir">
  </form>

  <?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $idcli = $_POST["idcli"];

      $servername = "localhost";
      $database = "agentebancario";
      $username = "usuario1";
      $password = "bia";

      $conn = mysqli_connect($servername, $username, $password, $database);

      if (!$conn) {
          echo "<div class='message error'>Falha na conexão: " . mysqli_connect_error() . "</div>";
          exit;
      }

      echo "<div class='message'>Conectado com sucesso.</div>";

      $sql = "DELETE FROM movimentacao WHERE idmovimentacao = '$idcli'";

      if (mysqli_query($conn, $sql)) {
          echo "<div class='message success'>Comando executado com sucesso.</div>";
      } else {
          echo "<div class='message error'>Erro: " . mysqli_error($conn) . "</div>";
      }

      mysqli_close($conn);
  }
  ?>
</body>
</html>
