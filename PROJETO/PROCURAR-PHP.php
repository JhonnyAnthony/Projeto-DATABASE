<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurar</title>
    <link rel="stylesheet" href="navbar.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>
    <h1>Encontrar</h1>
    <?php 
    if(isset($_POST["nome"]))
    {
        $nome = $_POST["nome"];
        $conexao = new mysqli("127.0.0.1","root","","crud_jhonny_souza" );
        // Caso aconteça erro de conexão
    if ($conexao->connect_errno){
        echo "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }
    // Arrumar os acentos
    $conexao-> set_charset("utf8");
    $sql = "SELECT * FROM cliente WHERE nome='$nome';";
    echo $sql."<br>";
    $result = $conexao-> query($sql);
    if ($result->num_rows > 0) 
        {
            while ($linha = $result-> fetch_assoc())
            {
            echo "Nome:".$linha['nome']."<br>";
            echo "E-mail:".$linha['email']."<br>";
            echo "Cidade:".$linha['cidade']."<br>";
            echo "UF:".$linha['uf']."<br><br>";
            }
        }else{
            header("location: naoencontrado.php"); 
        }
        $conexao-> close()."<br>";
    }
    echo "<a href='index.php'>Voltar</a>";
    ?>
   <nav class="navbar">
        <ul>
          <li><a href="index.php" class="fa-solid fa-house" title="Menu"></a></li>
          <li>
            <a
              href="procurar.php"
              class="fa-solid fa-magnifying-glass"
              title="Buscar usuário"
            ></a>
          </li>
          <li><a href="formulario.php" title="Cadastrar usuário">CADASTRAR</a></li>
          <li><a href="TABELA-PHP.php" title="Listar usuários">LISTAR</a></li>
          <li><a href="LISTA.php">LISTA</a></li>
          <li><a href="atualizar.php" title="Atualizar usuário">ATUALIZAR</a></li>
          <li>
            <a href="apagar.php" class="fa-solid fa-eraser" title="Apagar usuário"></a>
          </li>
        </ul>
      </nav> 
</body>
</html>