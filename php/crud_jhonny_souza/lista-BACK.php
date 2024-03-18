<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Lista dos Clientes</h1>
<?php
    $conexao = new mysqli("127.0.0.1","root","","crud_jhonny_souza" );
// Caso aconteça erro de conexão
    if ($conexao->connect_errno){
        echo "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }
// Arrumar os acentos
$conexao-> set_charset("utf8");
$sql = "SELECT * FROM cliente;";
echo $sql."<br>";

$result = $conexao->query($sql);
if ($result->num_rows > 0)
{
 while ($linha = $result-> fetch_assoc())
    {
    echo "Nome:".$linha['nome']."<br>";
    echo "E-mail:".$linha['email']."<br>";
    echo "Cidade:".$linha['cidade']."<br>";
    echo "UF:".$linha['uf']."<br><br>";
    }
}
else{
echo "Sem resultados1";
}
$conexao->close();
echo "<a href='index.php'>Voltar</a>";
?>
</body>
</html>