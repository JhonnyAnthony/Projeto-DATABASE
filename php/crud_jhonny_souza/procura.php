<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procura</title>
    <style type="text/css">
        body{
            font-family:"Arial";
        }
        label{
            display:"inline-block";
            width:"60px";
        }
    </style>
</head>
<body>
    <form action="encontrar-BACK.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Escreva o nome">
        <br>
        <br>
        <button type="submit"> Procurar </button>        
    </form>
    </body>
</html>