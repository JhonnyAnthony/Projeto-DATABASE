<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Básico com PHP</title>
    <style type="text/css">
        body{
            font-family: Arial;

        }
        label{
            display: inline-block;
            width: 60px;
        }
    </style>
</head>
<body>
    <form action="cadastro-BACK.php" method="POST">
        <!-- nome -->
        <label >Nome:</label>
        <input type="text" name="nome" placeholder="Qual o seu nome?" required> 
        <br>
        <!-- email -->
        <label" >Email:</label>
        <input type="email" name="email" placeholder="Qual o seu email?"required> 
        <br>
        <!-- cidade -->
        <label >Cidade:</label>
        <input type="text" name="cidade" placeholder="Qual a sua cidade?"required> 
        <br>
        <!-- uf -->
        <label >Uf:</label>
        <input type="text" name="uf" placeholder="Qual o seu estado?"required> 
        <br>
        <input type="hidden"value="-1" name="id">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>