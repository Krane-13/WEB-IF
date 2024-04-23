<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Login<input type="text" name="usuario"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" name="enviar" value="login">
</form>

<?php
if(isset($_GET["enviar"])){
    echo("clicou no botão de enviar");
    echo("Usuario" .$_POST["usuario"]);
    echo("Senha". $_POST["senha"]);
} else{
    echo("Usuario não clicou em enviar");
}
?>
</body>
</html>