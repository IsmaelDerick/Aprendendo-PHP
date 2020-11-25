<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Sistema - Cadastrar </title>
</head>

<body>
    <h1>Cadastrar usuário</h1>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION('msg');
            unset($_SESSION['msg']);
        }
    ?>

    <form method="POST" action="cadastra.php">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite seu nome"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="email@dominio.com"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>



</html>