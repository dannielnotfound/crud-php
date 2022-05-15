<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD - Php</title>
</head>
<body>
    <div class="box">
        <h1>CRUD: <span> PDO </span>&<span> MYSQLi </span></h1> 
    </div>
    <nav>
        <ul>
            <li><a href="">Cadastro</a></li>
            <li><a href="">Seleção</a></li>
            <li><a href="">Deletar</a></li>
            <li><a href="">Atualização</a></li>
        </ul>
    </nav>
    <?php 
        include("Class/ClassConexao.php");
    ?>
</body>
</html>