<?php

if (isset($_POST["btn-entrar"])) :
    echo 'clicou!';
endif;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="" method="POST">
        Login: <input type="text" name="login" id=""><br>
        Senha <input type="password" name="senha" id="">
        <br>
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>

</html>