<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Clientes 2
        <table border="1px">
            <tr>
                <th>ID      </th>
                <th>Nome    </th>
                <th>E-mail  </th>
                <th>Cidade  </th>
                <th>UF      </th>
            </tr>
<?php 
//     variavel      |        server   |  login,senha | (nome banco)
     $conexao = new mysqli("127.0.0.1","root","","crud_jhonny_souza" );
    if ($conexao->connect_errno){
     echo "Ocorreu um erro na conexão com o banco de dados.";
     exit;
        }
// Arrumar os acentos
    $conexao-> set_charset("utf8");

    $sql = "SELECT * FROM cliente;";
    echo $sql."<br>";
    $result = $conexao->query($sql);
    if($result->num_rows > 0){
        while($linha = $result-> fetch_assoc()){
            echo "<tr>";
            echo "<td>".$linha['id']."</td>";
            echo "<td>".$linha['nome']."</td>";
            echo "<td>".$linha['email']."</td>";
            echo "<td>".$linha['cidade']."</td>";
            echo "<td>".$linha['uf']."</td>";
            echo "</tr>";
        }
    } else {
        echo "Sem resultados";
    }
    $conexao->close();
echo "<a href='index.php'>Voltar</a>"
?>
</table>
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